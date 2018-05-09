<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    protected $primaryKey = 'id_paciente';

    public $timestamps = false;

    protected $fillable = [
    'nome_paciente',
    'rg_paciente',
    'cpf_paciente',
    'end_paciente',
    'cidadade_paciente',
    'cep_paciente',
];
protected $guarded = [];

}
