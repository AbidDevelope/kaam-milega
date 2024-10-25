<?php



namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;



class EnqueryFormRequest extends FormRequest

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
            'email'=>'required',
            'mobile'=>'required',
            'subject'=>'required',
            'comment'=>'required',
            
        ];
        
        
        return $rules;



    }

}

