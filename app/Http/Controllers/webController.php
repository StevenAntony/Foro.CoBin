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
        $Ruta = [
            'nombre' => ['Inicio'],
            'direct' => ['foro.index']
        ];
        $UltimoPregunta = $Execute->ListarUltimasPreguntas();

        $Result = $Execute->ListarCategoria();

        return view('welcome')->with('categoria',$Result)
                              ->with('ruta',$Ruta)
                              ->with('ultimaP', $UltimoPregunta);
    }

    public function CategoriaIndex($area,$categoria)
    {
        $Execute = new WebProcedure;

        if (($area == 'Lenguajes' || $area == 'Sistema Operativo' || $area == 'Base Datos'|| $area == 'Herramientas') && (count($Execute->BuscarCategoria($categoria))>0)) {
            $Ruta = [
                'nombre' => ['Inicio', $area , $categoria],
                'direct' => ['foro.index', 'foro.categoria', 'foro.categoria'],
            ];

            $Result = $Execute->ListarCategoria();
            return view('categoria/lenguaje')->with('categoria', $Result)
                                                ->with('ruta', $Ruta);
        }else{
            return 'no se encontro la pagina';
        }
    }
}
