<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EnqueryForm;
use App\User;
use DB;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\View;

class EnqueryFormController extends Controller
{
    public function store(Request $request)
    {
        $error = 0;
        $msg = "success";
        $data = [];
        $rules = [
            "name" => "required||max:255",
            "email" => "required",
            "phone" => "required",
            "comment" => "required",
            "gender" => "required",
        ];

        DB::beginTransaction();
        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
            } else {
                
                $mObj = new EnqueryForm();
                $mObj->name = $request->name;
                $mObj->email = $request->email;
                $mObj->mobile = $request->phone;
                $mObj->gender = $request->gender;
                $mObj->comment = $request->comment;
                $mObj->save();
                $email= 'shoebali686@gmail.com';
                $ccEmail= 'shoeba051@gmail.com';
                $subject = 'Enquiry Email';
                $htmlContent = View::make('emails.contact', compact('mObj'))->render();
                $result = sendEmail($email, $subject, $htmlContent,$ccEmail);
                DB::commit();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $error = 1;
            $msg = $e->getMessage();
        }
        $res = [
            "error" => $error,
            "message" => $msg,
            "data" => $data,
        ];
        return response()->json($res, 200);
    }
   
}
