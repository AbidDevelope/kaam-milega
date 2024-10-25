<?php



namespace App;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\Model;
 
class Faq extends Model

{

   protected $fillable = [ 'title','descriptions','faq_for'];
 
}

