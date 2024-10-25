<?php



namespace App;

use Carbon\Carbon;





use Illuminate\Database\Eloquent\Model;



class EnqueryForm extends Model

{

   protected $fillable = ['name','email','mobile','subject','comment'];

}

