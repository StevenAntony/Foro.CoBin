<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Table BD
    protected $table = 'categoria';
    /**
     * Indicar clave primaria no entero.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $keyType = 'string';

    public function tema()
    {
        return $this->hasMany('App\Tema');
    }
}
