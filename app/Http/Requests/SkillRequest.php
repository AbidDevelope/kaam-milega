<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{ 

    public function authorize()
    {
        return true;
    } 
    public function rules()
    {
        $rules = [
            "skill_name" => "required",
        ];
        if ($this->getMethod() == 'POST') {
            $rules += ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'];
            
        }
        if ($this->getMethod() == 'PUT ') {
            $rules += ['image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'];
             
        }
        return $rules;
    }
}
