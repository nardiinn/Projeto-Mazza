<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id_user';

    public $timestamp = false;
}
