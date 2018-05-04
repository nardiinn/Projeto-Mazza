<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
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
    'nome_paciente'      => 'required | max:45',
    'rg_paciente'        => 'required | max:12',
    'cpf_paciente'       => 'required | max:12',
    'end_paciente'       => 'required | max:45',
    'cidadade_paciente'  => 'required | max:45',
    'cep_paciente'       => 'required | max:15',
    ];
    }
}
