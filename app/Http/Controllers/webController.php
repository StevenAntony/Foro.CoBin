<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure\WebProcedure;
use App\Categoria;
use JavaScript;
use Response;
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
        $score = $Execute->UserMostScore();
        $userData = [
            'datos'=>'',
            'puntaj'=>''
        ];
        $mayor=0;
        for ($i=0; $i <count($score) ; $i++) {
            if ($score['puntaje'][$i] > $mayor) {
                $mayor = $score['puntaje'][$i];
                $userData['datos'] = $score['usuario'][$i];
                $userData['puntaj'] = $mayor;
            }
        }

        $Result = $Execute->ListarCategoria();
        // $obj =new Categoria;
        // $AllCategoria = $obj->get();
        return view('home')->with('categoria',$Result)
                              ->with('ruta',$Ruta)
                              ->with('score',$userData)
                            //   ->with('all',$AllCategoria)
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

    public function BusquedaPOST(Request $request)
    {
        $Execute = new WebProcedure;
        $variable = $request->input('input');
        $buscado = $Execute->BusquedaJSON($variable);
        // var_dump($buscado);
        // die();

        return response()->json($buscado);
    }
}
