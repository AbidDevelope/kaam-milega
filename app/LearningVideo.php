<?php



namespace App;

use Carbon\Carbon;
 
use Illuminate\Database\Eloquent\Model;
 
class LearningVideo extends Model

{

   protected $fillable = [ 'title','durations','image','video_link'];
 
}

