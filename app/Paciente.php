<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    protected $primarykey = 'id_paciente';

    public $timestamp = false;

    protected $fillable = [
    'nome_paciente',
    'rg_paciente',
    'cpf_paciente',
    'end_paciente',
    'cidadade_paciente',
    'cep_paciente'
];

}
