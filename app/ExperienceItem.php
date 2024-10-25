<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\UserInformation;

class ExperienceItem extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'employment_type',
        'company_name',
        'company_location',
        'location_type',
        'start_date',
        'end_date',
        'industry',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
