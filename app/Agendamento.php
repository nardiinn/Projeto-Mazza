<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamento';
    protected $primaryKey = 'id_agendamento';

    public $timestamps = false;	

    public $fillable = [
    	'data_agendamento',
    	'hora_agendamento',
    	'data_atendimento',
    	'hora_atendimento'
    ];
     protected $guarded = [];
}
