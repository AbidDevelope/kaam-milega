<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HelpCenter;
use App\User;
use DB;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\View;

class HelpCenterController extends Controller
{
    public function store(Request $request)
    {
        $error = 0;
        $msg = "success";
        $data = [];
        $rules = [
            "fname" => "required||max:255",
            "lname" => "required||max:255",
            "email" => "required",
            "phone" => "required",
            "comment" => "required",
            "company" => "required",
        ];

        DB::beginTransaction();
        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
            } else {
                
                $mObj = new HelpCenter();
                $mObj->first_name = $request->fname;
                $mObj->last_name = $request->lname;
                $mObj->email = $request->email;
                $mObj->phone = $request->phone;
                $mObj->company = $request->company;
                $mObj->comment = $request->comment;
                $mObj->save();
                $email= $request->email;
                $ccEmail= 'shoeba051@gmail.com';
                $subject = 'Help Center Email';
                $htmlContent = View::make('emails.help-center', compact('mObj'))->render();
                $result = sendEmail($email, $subject, $htmlContent,$ccEmail);

                // Mail::to($request->email)->send(
                //     new ContactForm($data)
                // );
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
