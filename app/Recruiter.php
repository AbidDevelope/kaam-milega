<?php



namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Str;
use Carbon\Carbon;

class Recruiter extends Authenticatable

{

    use Notifiable;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
                           'full_name', 
                           'phone', 
                           'email',
                           'otp', 
                           'consultant', 
                           'gst_certificate', 
                           'pan_certificate', 
                           'fssai_certificate', 
                           'incorporation_certificate', 
                           'shop_certificate', 
                           'msme_certificate', 
                           'certificate_number', 
                           'email_verified_at', 
                           'password',

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
}

