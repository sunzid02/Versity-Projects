<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'accountNo'=> 'required|unique:accounts,accNo',//accounts table a accNo column a value ta unique ta check kore
            'accountName' => 'required|min:3|max:35',
            'initialBalance' => 'required|numeric'
            //'hobby' => 'nullable'; mane aita nullable hote pare.
            //'initialBalance' => 'bail|required|numeric' bail dile akta false hoile porer gula ar check korbe na
        ];
    }

    //.............Create custom messages......................................................................
    public function messages()
    {
        return [
            'accountNo.required'=> 'Account number ki tomar nanu dibo?',//accounts table a accNo column a value ta unique ta check kore
            'accountNo.unique'=> 'Account number unique de',//accounts table a accNo column a value ta unique ta check kore

            'accountName.required' => 'Account name ki tomar khalu dibo?',
            'accountName.min' => 'Bangali na? eto choto nam keno dichen',

            'initialBalance.required' => 'Balance de batpar',
            'initialBalance.numeric' => 'Tk ki ko kho hoy naki? number den mia'
            //'hobby' => 'nullable'; mane aita nullable hote pare.
            //'initialBalance' => 'bail|required|numeric' bail dile akta false hoile porer gula ar check korbe na
        ];
    }
}
