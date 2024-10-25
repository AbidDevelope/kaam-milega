<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'contest_name'=>'required',
            'title'=>'required',
            'topics'=>'required',
            'descriptions'=>'required',
            'date'=>'required',
        ];
 
        if ($this->getMethod() == 'POST') {
            $rules += ['banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            $rules += ['logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        }

        if ($this->getMethod() == 'PUT ') {
            $rules += ['banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
            $rules += ['logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        }

        return $rules;

    }
}
