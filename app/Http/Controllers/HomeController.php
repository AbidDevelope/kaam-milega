<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Course;
use App\ReferenceMaterial;
use App\User;
use App\Question;
use App\ResultSheet;
use App\Organization;
use App\EnqueryForm;
use Carbon\Carbon;

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

         request()->attributes->add(['module' => 'dashboard']); 

        $this->middleware('isAdmin');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    { 

        $today = Carbon::today();
        $today_user = User::whereDate('created_at', $today)->count();
        $male_user = User::where('gender', 'Male')->count();
        $female_user = User::where('gender', 'Female')->count();
        $today_user = User::whereDate('created_at', $today)->count();
        $courses = 0;
        $refrence_material = 0;
        $users = User::count();
        $questions = 0;
        $organizations = 0;
        $enquery_forms = EnqueryForm::count();

        $user = User::where("is_admin", 0)
            ->filters()
            ->orderBy("created_at", "DESC")
            ->get();
        $certifiedUsersCount = 0;  
       
        // dd($certifiedUsersCount);
        return view( 'admin.home',compact('courses','refrence_material','users','organizations','questions','enquery_forms','today_user','male_user','female_user','certifiedUsersCount'));
 
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

