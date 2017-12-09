<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class concertRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
          'concertName'=> 'required|unique:accounts,accNo',//accounts table a accNo column a value ta unique ta check kore
          'concertDateTime' => 'required|min:3|max:35',
          'concertVenue' => 'required'
          'ticketQuantity' => 'required'
          'perTicketPrice' => 'required'
          //'hobby' => 'nullable'; mane aita nullable hote pare.
          //'initialBalance' => 'bail|required|numeric' bail dile akta false hoile porer gula ar check korbe na
      ];

    }
}
