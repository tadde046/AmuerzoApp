<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSalasRequest extends FormRequest
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
        return [
            'name' => 'required',
            'url' => 'required',
            'ceo' =>'required',
            'cantidad' => 'required',
            'operando1' => 'required',
            'operando2' => 'required',
            'operando3' => 'required',
            'operando4' => 'required',
            'operando5' => 'required',
            'operando6' => 'required',
            'operando7' => 'required',
            'operando8' => 'required',
            'operando9' => 'required',
            'operador1' => 'required',
            'operador2' => 'required',
            'operador3' => 'required',
            'operador4' => 'required',
            'operador5' => 'required',
            'operador6' => 'required',
            'operador7' => 'required',
            'operador8' => 'required',
            'operador9' => 'required',

        ];
    }
}
