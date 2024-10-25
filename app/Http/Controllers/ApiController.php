<?php
namespace App\Http\Controllers;
use Cookie;
use DB;
use Google;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Google\Client as Google_Client;
use Google\Service\Gmail;
use App\GmailToken;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Password;
use App\Helpers\Helpers;
use App\Otp;
use App\User; 
use App\State;
use App\JobCategory;
use App\EducationLevel;
use App\UserInformation;
use App\ExperienceItem;
use App\EducationItem;
 
use App\Skill;


class APIController extends Controller
{
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function SendOtp(Request $request)
    {
        $error = 0;
        $msg = 'success';
        $data = [];

        $validator = \Validator::make($request->all(), [
            'phone' => 'required',
        ]);

        $otp = Helpers::generateOtp();

        try {
            $phone = $request->input('phone');
            $otpData = Otp::where('phone', $phone)->first();

            if (!$otpData) {
                $otpData = new Otp;
                $otpData->phone = $phone;
            }

            $otpData->otp = $otp;
            $otpData->save();

            if ($validator->fails()) {
                throw new \Exception($validator->errors());
            }
        } catch (\Exception $e) {
            $error = 1;
            $msg = $e->getMessage();
            $this->db->rollBack();
        }

        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $otpData,
        ];

        return response()->json($res, $error ? 400 : 200);
    }

    

    public function VerifyOtp(Request $request)
    {
        $error = 0;
        $msg = 'success';
        $data = [];

        $validator = \Validator::make($request->all(), [
            'phone' => 'required',
            'otp' => 'required',
        ]);

        try {
            $phone = $request->input('phone');
            $otpData = Otp::where('phone', $phone)->first();
          
            if (!$otpData || $request->input('otp') != $otpData->otp) {
                return response()->json(['status' => 'error', 'message' => 'Invalid OTP'], 400);
            }

            $data = User::firstOrCreate(['phone' => $phone], [
                'user_id' => 'SEEK' . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT),
                'phone' => $phone,
            ]); 
        } catch (\Exception $e) {
            $error = 1;
            $msg = $e->getMessage();
        }

        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];

        return response()->json($res, $error ? 400 : 200);
    }

    public function jobSeekerStore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'user_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            // 'education_level' => 'sometimes|array',
            'experience' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            // 'get_me_update' => 'sometimes|boolean',
            // 'job_category' => 'sometimes|array',
            // 'skills' => 'sometimes|array',
            'state' => 'required|string|max:255',
            'work_experience' => 'required|string|max:255',
        ]);
        

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => $validator->errors()], 400);
        }

        $user = User::where('user_id', $request->input('user_id'))->first();

        if (!$user) {
            return response()->json(['status' => 'failed', 'message' => 'User not found'], 404);
        }

        $user->update([
            'name' => $request->input('name'),
            'city' => $request->input('city'),
            'education_level' => serialize($request->input('education_level')),
            'experience' => $request->input('experience'),
            'gender' => $request->input('gender'),
            'get_me_update' => $request->input('get_me_update'),
            'job_category' => serialize($request->input('job_category')),
            'skills' => serialize($request->input('skills')),
            'state' => $request->input('state'),
            'work_experience' => $request->input('work_experience'),
        ]);
 

        return response()->json(['status' => 'success', 'message' => 'Profile updated successfully']);
    }
    

    public function statesList()
    {
         $states = State::orderBy('name','ASC')->get();
   
         return response()->json($states);
    }

    public function CityList($id)
    {
         $response = DB::table('districts')
                ->where('state_id',$id)->orderBy('name','ASC')->get();
         return response()->json($response);
    }

    public function CommanApi()
    {
        $jobCategories = JobCategory::all();
        $educationLevels = EducationLevel::all();
        $skills = Skill::all();
        $res = [
            'jobCategories' => $jobCategories,
            'educationLevels' => $educationLevels,
            'skills' => $skills,
        ];
         return response()->json($res);
    }



}
