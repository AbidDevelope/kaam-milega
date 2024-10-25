<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class EducationItem extends Model
{

    protected $fillable = [
        'user_id',
        'school',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'location',
        'description',
    ];
}
