<?php



namespace App;



use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Str;
use Carbon\Carbon;

use App\UserInformation;
use App\ExperienceItem;





class User extends Authenticatable

{

    use Notifiable;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'user_id', 'name', 'email', 'password','address','phone','provider', 'provider_id','permissions','city','education_level','experiance','gender','get_me_update','job_category','skills','state','work_experiance','user_id'

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];



    /**

     * The attributes that should be cast to native types.

     *

     * @var array

     */

    protected $casts = [

        'email_verified_at' => 'datetime',

    ];

    public function userInfo()
    {
        return $this->hasMany(UserInformation::class);
    }

    public function experienceItem()
    {
        return $this->hasMany(ExperienceItem::class);
    }



    public function generateToken() {

        $this->api_token = Str::random(60);

        ;

        $this->save();

        return $this->api_token;

    }
    public function userInfoData()
    {
         
        return $this->belongsTo(UserInformation::class,'user_id', 'user_id');
    }
    



    public function generateOtp() {

        $this->otp = mt_rand(10000, 99999);

        $this->save();

        return $this->otp;

    }
    public function scopeFilters($q)
     {
        if (request('state')) {
        
            $q->where('state',request('state'));
        }
        if (request('organization')) {
        
            $q->where('organization',request('organization'));
        }
        if (request('gender')) {
        
            $q->where('gender',request('gender'));
        }

         if (request('start_date')) {
            
            $start = Carbon::parse(request('start_date'));
            $q->whereDate('created_at','>=',$start->format('y-m-d'));
            }else{
            $q->orderBy('created_at','desc');
        }

    
        return $q;
   }



}

