<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
        protected $table = 'respuesta';
    /**
     * Indicar clave primaria no entero.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $keyType = 'string';
}
