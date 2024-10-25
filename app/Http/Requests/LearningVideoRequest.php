<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class LearningVideoRequest extends FormRequest

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
            'title'=>'required',
            'durations'=>'required',
            'video_link'=>'required',
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
