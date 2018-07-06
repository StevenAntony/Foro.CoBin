<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //Table BD
    protected $table = 'tema';

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
