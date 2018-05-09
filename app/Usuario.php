<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuarios';

    public $timestamps = false;
    
    protected $fillable = [
    'nome_usuario',
    'senha'
];
protected $guarded = [];
}
