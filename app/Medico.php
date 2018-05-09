<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico';
    protected $primaryKey = 'id_medico';

    public $timestamps = false;

    protected $fillable = [
    'nome_med',
    'especializacao_med',
    'crm_med',
];
 protected $guarded = [];
}
