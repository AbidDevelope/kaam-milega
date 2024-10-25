<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest

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
            'name'=>'required',
            'comment'=>'required',
            'ratings'=>'required',
        ];
             
        if ($this->getMethod() == 'POST') {
            $rules += ['logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'];
           
        }
        if ($this->getMethod() == 'PUT ') {
            $rules += ['logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'];
             
        }
        return $rules;
    }
}
