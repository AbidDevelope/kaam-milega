<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruiterReview extends Model
{
   protected $fillable = ['name','comment','company_name','logo'];
}
