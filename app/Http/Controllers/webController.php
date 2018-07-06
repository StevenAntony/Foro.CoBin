<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure\WebProcedure;
// use App\Categoria;

class webController extends Controller
{
    public function Index()
    {
        $Execute = new WebProcedure;
        $Ruta = ['Inicio'];
        $Result = $Execute->ListarCategoria();
        return view('welcome')->with('categoria',$Result)
                              ->with('ruta',$Ruta);
    }
}
