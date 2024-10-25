<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    protected $fillable = ["phone",'otp'];
}
