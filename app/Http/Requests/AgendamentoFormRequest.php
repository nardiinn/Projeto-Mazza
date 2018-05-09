<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
//use Illuminate\Http\Request;
use db_sistemamazza;



class AgendamentoFormRequest extends FormRequest
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
           
            'data_agendamento' => 'required | max:10',
            'hora_agendamento' => 'required | max:10',
            'data_atendimento' => 'required | max:10',
            'hora_atendimento' => 'required | max:10',
        ];
    }
}
