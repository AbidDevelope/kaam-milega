<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ExperienceItem;

class UserInformation extends Model
{
  
  protected $fillable = [
      'user_id',
      'additional_name',
      'designation',
      'user_profile',
      'user_background_profile',
      'pronouns',
      'headline',
      'about',
      'title',
      'employment_type',
      'company_name',
      'company_location',
      'school',
      'degree',
      'field_of_study',
      'school_location',
      'start_date',
    ];

    public function user()
    {
      return $this->belongsTo(User::class,'user_id', 'user_id');
    }

    public function experienceItem()
    {
      return $this->hasMany(ExperienceItem::class);
    }
}