<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleUser extends Model
{
    protected $table = 'detalleuser';

    public function user()
    {
        return $this->belongsTo('App\Categoria');
    }

}
