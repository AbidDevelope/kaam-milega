<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = ['contest_name','title','topics','banner','logo','descriptions','date'];
}
