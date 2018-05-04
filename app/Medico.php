<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico';
    protected $primarykey = 'id_medico';

    public $timestamp = false;

    protected $fillable = [
    'nome_end',
    'especializacao_med',
    'crm_med',
];
 protected $guarded = [];
}
