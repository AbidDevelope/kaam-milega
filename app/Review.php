<?php



namespace App;

use Carbon\Carbon;
 
use Illuminate\Database\Eloquent\Model;
 
class Review extends Model

{

   protected $fillable = [ 'name','comment','ratings','logo'];
 
}

