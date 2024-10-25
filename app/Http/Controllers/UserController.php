<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\UserForm;

use Illuminate\Support\Facades\Mail;
use App\Organization;
use App\State;
use App\ResultSheet;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
        $this->middleware("isAdmin");
    }

    private $folder = "admin.user.";
    private $base_url = "admin/users";
    private $label = "Participants";

    public function index()
    {
        $final_users = [];
        // dd(request('certificate'));
        $user = User::where("is_admin", 0)
            ->filters()
            ->orderBy("created_at", "DESC")
            ->get();
        
      
        foreach ($user as $key => $value) {
            $hasCertificates = $this->certificates($value->user_id);
            $certificateValue = request('certificate') == 'yes' ? 'Yes' : 'No';

            if ($hasCertificates || $certificateValue === 'No') {
                $final_users[] = [
                    'certificates' => $certificateValue,
                    'user_list' => $value,
                ];
            }
        }
        $organization = Organization::orderBy('company','asc')->get();
        $states = State::orderBy('name','asc')->get();
        // dd($states);
        $base_url = $this->base_url;

        $label = $this->label;

        // dd( $base_url);
        return view(
            $this->folder . "list",compact("final_users", "base_url", "label",'organization','states')
        );
    }

    

    public function store(Request $request)
    {
        $rules = [
            "name" => "required||max:255",

            "email" => "required|email",

            "query" => "required",
        ];

        $customMessages = [];

        $this->validate($request, $rules, $customMessages);

        $contact = new Contact();

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->query = $request->get("query");

        //dd($contact);

        $contact->save();

        Mail::to("shoeb@cruxcreativesolutions.com")->send(
            new ContactForm($request)
        );
 
        return back()->with(
            "success",
            "Your query has been submitted successfully"
        );
 
    }
    public function storeUser(Request $request)
    {
        $rules = [
            "phone" => "required||max:255",
        ];

        $customMessages = [];

        $this->validate($request, $rules, $customMessages);

        $contact = new Contact();

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->query = $request->get("query");

        //dd($contact);

        $contact->save();

        Mail::to("shoeb@cruxcreativesolutions.com")->send(
            new ContactForm($request)
        );
 
        return back()->with(
            "success",
            "Your query has been submitted successfully"
        );
 
    }
 
 

    public function show($id)
    {
        $user = User::with(["cars", "variant"])->find($id);

        //dd($user);

        return view("admin.user.show", ["user" => $user]);
    }

   

   
    public function destroy($id)
    {
        $blog = User::find($id);

        $blog->delete();

        //redirecting with flashj data

        return redirect("/admin/users")->with(
            "status",
            "User deleted successfully."
        );
    }
    public function changeStatus($id)

    {
         $user = User::where('id',$id)->where('is_admin',0)->firstOrFail();
        // dd($user);

         $user->active = ($user->active == 1) ? 0:1;
 
         $user->save();
         return redirect("/admin/users")->with(
            "status",
            "Status Changed successfully."
        );
         

          // return redirect('/admins/')->with('status','Status Changed successfully.');

    }
    private  function certificates($user_id) {

        $resultSheet = ResultSheet::with('users')->where('user_id', $user_id)->get();
        $passingModulesCount = $resultSheet->filter(function ($value) {
            $percentage = ($value->score / $value->total_questions) * 100;
            return $percentage >= 80;
        })->count();
        if ($passingModulesCount >= 10) {
            $data = true;
        }else{
            $data = false;
        }

        return $data;
    }
}
