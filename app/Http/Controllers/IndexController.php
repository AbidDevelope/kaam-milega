<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\Success;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use \NumberFormatter;
use App\Banner;
use App\State;
use App\JobCategory;
use App\Faq;
use App\Review;
use App\LearningVideo;
use App\EducationLevel;
use App\Skill;
use App\JobTitle;
use App\Event;
use App\RecruiterReview;
use App\User;
use App\Follower;
 
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
    }
 

    public function index()
    {
        $banner = Banner::first();
        $JobCategory = JobCategory::limit(10)->get();
        $states = State::orderBy('name','asc')->get();
        $faqs = Faq::all();
        $reviews = Review::all();
        $learning_video = LearningVideo::all();
        $education_level = EducationLevel::all();
        $skills = Skill::all();
        $job_type = JobTitle::all();
        $events = Event::orderBy('id','desc')->get();
        $connect = User::with('userInfoData')->where('is_admin',0)->get();
        // $usersWithInfo = User::with('userInfoData')
        //                 ->where('is_admin', 0)
        //                 ->get();
        // dd($usersWithInfo); 
        if (Auth::user() && Auth::user()->is_admin == 0) {
           $connect = User::where('user_id', '!=', auth()->user()->user_id)->where('is_admin',0)->get();

            // dd($connect);
            return view('home-page-after-login', compact('connect'));
        } else { 
             
            return view('home', compact('banner','states','JobCategory','faqs','reviews','learning_video','skills','education_level','job_type','events','connect'));
        }
         
    }

    public function jobListing(){
        if(!auth()->user()){
            
            return view("job-listing-page-before-login");
        }
        return view("job-listing-page-after-login");
         
    }
    public function jobListingDetails(){
        if(!auth()->user()){
            
            return view("job-listing-details-page-before-login");
        }
        return view("job-listing-details-page-after-login");
         
    }
    public function recHome(){
        
        $banner = Banner::first();
        $JobCategory = JobCategory::limit(10)->get();
        $states = State::orderBy('name','asc')->get();
        $faqs = Faq::all();
        $recruiter_review = RecruiterReview::all();
      
        return view('rec-home', compact('banner','states','JobCategory','faqs','recruiter_review'));
         
    }

    public function follow($follow_id)
    {
        // Check if the user is trying to follow themselves
 
        if (auth()->user()->user_id) {
            $followers = Follower::firstOrNew([
                'follower_id' => $follow_id,
                'user_id' => auth()->user()->user_id,
            ]);

            if ($followers->exists) {
                if ($followers->status == 0) {
                    $followers->status = 1; 
                }else{
                    $followers->status = 0; 
                } 
                $followers->update();
                return response()->json(['message' => 'Successfully '.($followers->status== 1? 'followed .':'unfollow .'),'status'=> ($followers->status== 1? 1:0)]);
            } else { 
                $followers->user_id =  auth()->user()->user_id; 
                $followers->follower_id = $follow_id; 
                $followers->status = 1; 
                $followers->save();
                return response()->json(['message' => 'Successfully followed.','status'=>1]);
            } 
        } else {
            return response()->json(['message' => 'You cannot follow yourself.'], 422);
        }
    }
    public function getFollowers()
    {
        $followers = auth()->user()->followers;

        return response()->json(['followers' => $followers]);
    }
     
}
