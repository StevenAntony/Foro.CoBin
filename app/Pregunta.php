<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //Table BD
        protected $table = 'pregunta';
    /**
     * Indicar clave primaria no entero.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $keyType = 'string';
    public function tema()
    {
        return $this->belongsTo('App\Tema');
    }
    public function respuesta()
    {
        return $this->hasMany('App\Respuesta');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
