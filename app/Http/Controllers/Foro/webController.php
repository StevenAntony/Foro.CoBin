<?php

namespace App\Http\Controllers\Foro;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\AdministrationDatabase\WebProcedure;

use App\Http\Controllers\Controller;
use App\AdministrationDatabase\storedProcedures;
use App\Categoria;
use App\Tema;
use App\DetalleUser;
use JavaScript;
use Response;
// use App\Categoria;

class webController extends Controller
{
    public function Index()
    {
        if (Auth::check()) {
            // dd(Auth::user());

            $objDU = new DetalleUser;
            $exist = $objDU->where('user_id','=', Auth::user()->id)->count();
            if ($exist == 0) {
                $objDU->user_id = Auth::user()->id;
                $objDU->avatar_dus = '067-jefe-1';
                $objDU->ubicacion_dus = 'null';
                $objDU->puntaje_dus = 0;
                $objDU->nivel = 1;
                $objDU->estado = 'activo';
                $objDU->save();
            }

        }
        $Execute = new WebProcedure;
        $Ruta = [
            'nombre' => ['Inicio'],
            'direct' => ['foro.index']
        ];
        $UltimoPregunta = $Execute->ListarUltimasPreguntas();
        $score = $Execute->UserMostScore();
        // dd($score);
        if (count($UltimoPregunta)==0) {
            $UltimoPregunta = null;
        }
        if (count($score)==0) {
            $score = null;
        }
        // dd($score[0]);
        $TemasDetalle = $Execute->ListarNewTema();
        $Result = $Execute->ListarCategoria();
        return view('home')->with('categoria',$Result)
                              ->with('ruta',$Ruta)
                              ->with('score',$score[0])
                              ->with('temas',$TemasDetalle)
                              ->with('ultimaP', $UltimoPregunta);
    }

    public function CategoriaIndex($area,$categoria)
    {
        $Execute = new WebProcedure;
        $call = new storedProcedures;
        // dd($proc);
        if (($area == 'Lenguajes' || $area == 'Sistema Operativo' || $area == 'Base Datos'|| $area == 'Herramientas') && (count($Execute->BuscarCategoria($categoria))>0)) {
            $Ruta = [
                'nombre' => ['Inicio', $area , $categoria],
                'direct' => ['foro.index', 'foro.categoria', 'foro.categoria'],
            ];

            $Cat = $Execute->BuscarCategoria($categoria);
            $detaCat = $call->call('CALL proc_detalleCategoria(?,?)', [$Cat[0]->codigo_cat, 'normal']);
            $Result = $Execute->ListarCategoria();
            return view('categoria/lenguaje')->with('categoria', $Result)
                                                ->with('detalleCategoria',$detaCat)
                                                ->with('ruta', $Ruta)
                                                ->with('descripcionCat',$Cat);
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

    public function TemaIndex($area, $categoria,$tema)
    {
        $Execute = new WebProcedure;
        $exist = $Execute->SearchThemeInCategory($categoria, $tema);

        // $users = DB::select('CALL proc_detalleCategoria(?)', );

        if (($area == 'Lenguajes' || $area == 'Sistema Operativo' || $area == 'Base Datos'|| $area == 'Herramientas') && (count($Execute->BuscarCategoria($categoria))>0) && (count($Execute->BuscarTema($tema)) > 0) && count($exist)==1 ) {
            $Ruta = [
                'nombre' => ['Inicio', $area , $categoria,'Tema',$tema],
                'direct' => ['foro.index', 'foro.categoria', 'foro.categoria', 'foro.categoria.tema', 'foro.categoria.tema'],
            ];

            $Result = $Execute->ListarCategoria();
            return view('tema/tema')->with('categoria', $Result)
                                                ->with('ruta', $Ruta);
        }else{
            return 'no se encontro la pagina';
        }
    }


    function cerrar(REQUEST $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('/Foro');
    }
}
