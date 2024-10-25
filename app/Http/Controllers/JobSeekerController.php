<?php
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Otp;
use App\State;
use App\JobCategory;
use App\EducationLevel;
use App\UserInformation;
use App\ExperienceItem;
use App\EducationItem;
use App\User;
use App\Skill;
use DB;
use Carbon\Carbon; 
use Validator;
use Image;
use Illuminate\Support\Str;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Session;
// use Auth;
use Illuminate\Support\Facades\Auth;

class JobSeekerController extends Controller
{
    
    public function index()
    {
        $users = User::where('is_admin',0)->get();
        // dd($users);
        return view("admin.job-seeker.list",compact('users'));
    }
    public function showLoginForm()
    {
        if (Auth::user() && Auth::user()->is_admin == 0) {
            return redirect('/');
        }
        return view("login");
    }

    public function reSendOtp(){
        $otp = Helpers::generateOtp();
        $phone = request('phone');
        
        $otpData = Otp::where('phone', $phone)->first();

        if (!$otpData) {
            $otpData = new Otp;
            $otpData->phone = $phone;
        } 
        $otpData->otp = $otp;
        $otpData->save();

        if ($otpData) {
            return response()->json(['success' => true, 'message' => 'Otp Sent successfully.']);
        } else {
            return response()->json(['success' => false]);
        }
    }
 
    public function verifyOtp(Request $request){
        $mobileNumber = $request->input('phone');
        $otp = intval(implode("", $request->input('otp')));

        $otpData = Otp::where('phone', $mobileNumber)->first();
        $randomNumber = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $random = 'SEEK' . $randomNumber;
        
        if ($otp == $otpData->otp) {
            $user = User::firstOrNew(['phone' => $mobileNumber]);

            if (!$user->exists) {
                $user->user_id = $random;
                $user->phone = $mobileNumber;
                $user->save();
                Session::put('mobileNumber', $mobileNumber);
                return response()->json(['status' => 'success', 'message' => 2]);
            } elseif (empty($user->name)) {
                 Session::put('mobileNumber', $mobileNumber);
                return response()->json(['status' => 'success', 'message' => 2]);
            } else {
                Auth::login($user); 
                return response()->json(['status' => 'success', 'message' => 1]);
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP'], 400);
        }
    }
    public function jobSeekerStore(Request $request){
        $data = $request->all();
 
        $name = $data['name'] ?? null;
        $city = $data['city'] ?? null;
        $educationLevel = $data['education_level'] ?? null;
        $experience = $data['experiance'] ?? null;
        $gender = $data['gender'] ?? null;
        $getMeUpdate = $data['get_me_update'] ?? null;
        $jobCategory = $data['job_category'] ?? null;
        $skills = $data['skills'] ?? null;
        $state = $data['state'] ?? null;
        $workExperience = $data['work_exprience'] ?? null;

        $mobileNumber = Session::get('mobileNumber');

        if ($mobileNumber) {
            $user = User::where('phone', $mobileNumber)->first();

            if ($user) {
                 
                $user->update([
                    'name' => $name,
                    'city' => $city,
                    'education_level' => serialize($educationLevel),
                    'experiance' => $experience,
                    'gender' => $gender,
                    'get_me_update' => $getMeUpdate,
                    'job_category' => serialize($jobCategory),
                    'skills' => serialize($skills),
                    'state' => $state,
                    'work_experiance' => $workExperience,
                ]);
                Auth::login($user); 
                return response()->json(['status' => 'success', 'message' => 'Registration successfully']);
            }
        }

        return response()->json(['status' => 'failed', 'message' => 'Error']);
    }

    public function makeProfile(){
        // if(!auth()->user()){
        //     return redirect('/login');
        // }

        $mobileNumber = Session::get('mobileNumber');

        if ($mobileNumber === null) {
            return redirect('/login');
        }

        $states = State::all();
        $jobCategories = JobCategory::all();
        $educationLevels = EducationLevel::all();
        $skills = Skill::all();

        return view("make-your-profile", compact("states", "jobCategories", "educationLevels",'skills'));
    }
    public function homePageAfterLogin(){
        if(!auth()->user()){
            return redirect('/');
        }
        return view("home-page-after-login", );
         
    }
    

    public function cities($id)
    {
         $response = DB::table('districts')
                ->where('state_id',$id)->orderBy('name','ASC')->get();
         return response()->json($response);
    }
    private function sendOtpToNumber($number)
    {
      $rand_no =  mt_rand(10000,99999);  
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://kit19.com/ComposeSMS.aspx?username=carlelo920995&password=carlelo%40123&sender=CARLLO&to='.$number.'&message='.$rand_no.'%20is%20the%20One-Time%20Password%20to%20verify%20your%20phone%20number.%20Please%20enter%20the%20OTP%20to%20begin%20your%20journey.%20A%20world%20of%20best%20deals%20awaits%20you.%20Best%20Regards%20Team%20Car%20Lelo&priority=1&dnd=1&unicode=0&dlttemplateid=1707169398630909138',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Cookie: ASP.NET_SessionId=p2prfuohkep02atr5t5qwjz5'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      $this->sendOtpToWhatsapp($number,$rand_no);
      session(['otp_get_deal'=> $rand_no]);
     
      return($rand_no);
     
    }
   
    public function userProfile()
    {
        $users = Skill::all();
        // dd($users);
        if(!auth()->user())
        {
            return redirect('/');
        }
        $userId = auth()->user()->user_id;
        
        $users = UserInformation::with('user')->where('user_id', $userId)->with('user')->first();
        $experienceItem = ExperienceItem::where('user_id', $userId)->get();
        $skills = Skill::all();
        // dd($experienceItem);
        $education = EducationItem::where('user_id', $userId)->get();
        
        // dd($users);
        // return $experienceItem;
        // dd($experienceItem);
        // 4 random SEEK
        //  SEEK
        //  REEK
        $firstName = '';
        $lastName = '';
        if ($users && $users->user) {
            $nameParts = explode(' ', $users->user->name, 2);
            $firstName = $nameParts[0] ?? '';
            $lastName = $nameParts[1] ?? '';
        }
        return view('user-profile', compact('users', 'firstName', 'lastName', 'experienceItem', 'education', 'skills'));
    }

    public function backgroundImageUpload(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        
        $userId = auth()->user()->user_id;
        
        $users = UserInformation::where('user_id', $userId)->first();
        
        if ($users) {
            if ($request->hasFile('user_background_profile')) {
                $file = $request->file('user_background_profile');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets-new/images/user-profile'), $filename);
                
                $users->user_background_profile = $filename;
                $users->save();
            }

            return redirect()->back()->with('status', 'Background profile updated successfully.');
        } else {

            //User information doesn't exist, create a new record
            $users = new UserInformation();
            $users->user_id = $userId;
            if ($request->hasFile('user_background_profile')) {
                $file = $request->file('user_background_profile');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets-new/images/user-profile'), $filename);
                
                $users->user_background_profile = $filename;
            }
            $users->save();

            return redirect()->back()->with('status', 'Background profile created successfully.');
        }
    }

    public function profileUpload(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        
        $userId = auth()->user()->user_id;
        
        $users = UserInformation::where('user_id', $userId)->first();
        
        if ($users) {
            if ($request->hasFile('user_profile')) {
                $file = $request->file('user_profile');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets-new/images/user-profile'), $filename);
                
                $users->user_profile = $filename;
                $users->save();
            }

            return redirect()->back()->with('status', 'Background profile updated successfully.');
        } else {
            $users = new UserInformation();
            $users->user_id = $userId;
            if ($request->hasFile('user_profile')) {
                $file = $request->file('user_profile');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets-new/images/user-profile'), $filename);
                
                $users->user_profile = $filename;
            }
            $users->save();

            return redirect()->back()->with('status', 'Background profile created successfully.');
        }
    }

    public function editIntro(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        $userId = auth()->user()->user_id;
        $user = User::where('user_id', $userId)->first();
        
        $name = $request->input('first_name'). ' ' . $request->input('last_name');
        $request->merge(['name' => $name]);
        
        $user->update($request->except(['first_name', 'last_name']));
        
        $user->update($request->all());
        
        $userInfo = UserInformation::where('user_id', $userId)->first();
        $userInfo->update($request->all());

        session()->flash('success', 'Your data has been successfully updated.');
        return redirect()->back();

    }

    public function editAbout(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        $userId = auth()->user()->user_id;

        $userIntro = UserInformation::where('user_id', $userId)->first();
        $userIntro->update($request->all());

        session()->flash('success', 'Your data has been successfully updated.');
        return redirect()->back();
    }

    public function addExperience(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        $userId = auth()->user()->user_id;
        
        $start_date = Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');

        $exp = new ExperienceItem();
        $exp->user_id = $userId;
        $exp->title = $request->title;
        $exp->employment_type = $request->employment_type;
        $exp->company_name = $request->company_name;
        $exp->company_location = $request->company_location;
        $exp->location_type = $request->location_type;
        $exp->start_date = $start_date;
        $exp->end_date = $end_date;
        $exp->industry = $request->industry;
        $exp->description = $request->description;
        $exp->save();
        
        return redirect()->back();
    }

    public function experienceUpdate(Request $request,$id)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }
        $userId = auth()->user()->id;
    
        $start_date = date('Y-m-d', strtotime($request->start_date));
        $end_date = date('Y-m-d', strtotime($request->end_date));

        $experienceItem = ExperienceItem::where('id', $id)->first();

        if (!$experienceItem) {
            return redirect()->back()->with('error', 'Experience item not found.');
        }

        $experienceItem->update([
            'title' => $request->title,
            'employment_type' => $request->employment_type,
            'company_name' => $request->company_name,
            'company_location' => $request->company_location,
            'location_type' => $request->location_type,
            'end_date' => $end_date,
            'start_date' => $start_date,
            'industry' => $request->industry,
            'description' => $request->description,
        ]);


        session()->flash('success', 'Your data has been successfully updated.');
        return redirect()->back();
    }

    public function deleteExperience($id)
    {
        ExperienceItem::find($id)->delete();

        return redirect()->back();
    }

    public function addEducation(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }

        $userId = auth()->user()->user_id;
        $start_date = Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d');
        
        $education = new EducationItem();
        $education->user_id = $userId;
        $education->school = $request->school;
        $education->degree = $request->degree;
        $education->field_of_study = $request->field_of_study;
        $education->start_date = $start_date;
        $education->end_date = $end_date; 
        $education->location = $request->location;
        $education->description = $request->description;
        $education->save();
        
        return redirect()->back();
        
    }

    public function updateEducation(Request $request, $id)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }

        $userId = auth()->user()->user_id;
        $educationItem = EducationItem::where('id', $id)->first();

        $start_date = date('Y-m-d', strtotime($request->start_date));
        $end_date = date('Y-m-d', strtotime($request->end_date));

         if (!$educationItem) {
            return redirect()->back()->with('error', 'Experience item not found.');
        }

        $educationItem->update([
            'school' => $request->school,
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'location' => $request->location,
            'description' => $request->description,
        ]); 

        session()->flash('success', 'Your data has been successfully updated.');
        return redirect()->back();
    }

    public function deleteEducation($id)
    {
        EducationItem::find($id)->delete();

        return redirect()->back();
    }

    public function editContact(Request $request)
    {
        if(!auth()->user())
        {
            return redirect('/');
        }

        $userId = auth()->user()->user_id;
        $users = User::where('user_id', $userId)->first();

        $requestData = $request->all();
        $users->update($requestData);

        return redirect()->back();
    }
    
}
