<?php
namespace App\Procedure;

use Illuminate\Support\Facades\DB;
use App\Categoria;
use App\User;
use App\Tema;
use App\Pregunta;
use App\Respuesta;

class WebProcedure
{
    public function ListarCategoria()
    {
        $BD = new Categoria;
        $List = [
          'Lenguajes' => [],
          'BaseDatos' => [],
          'SistOper' => [],
          'Herramientas' => []
        ];

        $Result = $BD->where('codigo_categ','like','L%')
                                        ->get();
        $List['Lenguajes'] = $Result;
        $Result = $BD->where('codigo_categ','like','BD%')
                                        ->get();
        $List['BaseDatos'] = $Result;
        $Result = $BD->where('codigo_categ','like','SO%')
                                        ->get();
        $List['SistOper'] = $Result;
        $Result = $BD->where('codigo_categ','like','HR%')
                                        ->get();
        $List['Herramientas'] = $Result;
        // var_dump($List['Lenguajes']);
        // die();

        return $List;
    }

    public function SearchThemeInCategory($Category,$theme)
    {
        $BD = new Categoria;

        $Result = $BD->join('tema', 'categoria.codigo_categ','=', 'tema.codigo_categ')->where('categoria.nombre_categ', '=', $Category)
            ->where('tema.nombre_tem', '=', $theme)
            ->get()->count();


        return $Result;
    }

    public function BuscarCategoria($obj)
    {
        $BD = new Categoria;
        $Result = $BD->where('nombre_categ','=',$obj)->get();
        return $Result;
    }

    public function BuscarTema($obj)
    {
        $BD = new Tema;
        $Result = $BD->where('nombre_tem','=',$obj)->get();
        return $Result;
    }

    public function ListarUltimasPreguntas()
    {
        $BD = new User;
        $List = [
            'data' => [],
            'contRPT' => []
        ];
        // $Categoria = [
        //     'data' => '',
        //     'contPre'
        // ];
        // SELECT p.codigo_pre , count(r.codigo_resp) as cantidad from pregunta p inner join respuesta r on p.codigo_pre = r.codigo_pre where p.codigo_pre = 'P02B'


        // select('pg.codigo_pre', 'u.name', 'pg.titulo_pre', 'pg.fecha_pre', 'pg.hora_pre', 'ct.nombre_categ')
        $Result = $BD->join('pregunta','users.id','=','pregunta.user_id')
                    ->join('tema','pregunta.id_tem','=', 'tema.id_tem')
                    ->join('categoria','tema.codigo_categ','=','categoria.codigo_categ')
                    ->select('pregunta.codigo_pre', 'users.name', 'pregunta.titulo_pre', 'pregunta.fecha_pre', 'pregunta.hora_pre', 'categoria.nombre_categ')
                    ->orderByRaw('pregunta.fecha_pre DESC')
                    ->get();
        $List['data'] = $Result;

        for ($i = 0; $i < count($List['data']); $i++) {

            $result2 = DB::table('respuesta')->join('pregunta','pregunta.codigo_pre','=','respuesta.codigo_pre')
                        ->where('pregunta.codigo_pre','=', $List['data'][$i]->codigo_pre)
                        ->count('respuesta.codigo_resp');
            $List['contRPT'][$i] = $result2;
        }

        return $List;

    }

    function BusquedaJSON($var) {
        // select * from pregunta pg inner join respuesta rp on pg.codigo_pre = rp.codigo_pre where pg.titulo_pre like 'cre%'
        $List = [
            'pregunta' => '',
            'respuesta'=> []
        ];
        $BD = new Pregunta;
        $BDRPT = new Respuesta;
        $Result = $BD->where('pregunta.titulo_pre','like','%'.$var.'%')
                    ->get();
        for ($i=0; $i <count($Result) ; $i++) {
            $List[$i]['pregunta'] = $Result[$i];
            $Result2 = $BDRPT->where('codigo_pre', '=', $Result[$i]->codigo_pre)
                            ->get();
            for ($j=0; $j <count($Result2) ; $j++) {
                $List[$i]['respuesta'][$j] = $Result2[$j];
            }
        }

        // var_dump(count($List['pregunta']));
        // die();

        return $List;
    }

    public function UserMostScore()
    {
        $BD = new User;
        $UserScore = [
          'usuario'=>[],
          'puntaje'=>[]
        ];

        $usuarios = $BD->join('detalleuser','detalleuser.user_id','=','id')->get();
        // var_dump(count($usuarios));
        // die();

        for ($i=0; $i <count($usuarios) ; $i++) {
            $puntajeTotal = 0;
            $Respustas = $BD->join('respuesta','respuesta.user_id','=','users.id')->where('users.id','=',$usuarios[$i]->id)->get();
            for ($j=0; $j <count($Respustas) ; $j++) {

                $puntajeTotal = $puntajeTotal + $Respustas[$j]->valoracion_resp;
            }
            $UserScore['usuario'][$i] = $usuarios[$i];
            $UserScore['puntaje'][$i] = $puntajeTotal;
        }

        return $UserScore;
    }

    public function ListarCategDeta()
    {
        $List = [
            'datosC' => [],
            'tema' => [
                'datosT' => [],
                'contPreg' => []
            ]

        ];
        $DB = new Categoria;
        $Categorias = $DB->get();
        for ($i=0; $i <count($Categorias) ; $i++) {
            $List[$i]['datosC'] = json_decode($Categorias[$i]);
            $Result = $DB->join('tema','categoria.codigo_categ','tema.codigo_categ')
                            ->where('categoria.codigo_categ','=',$Categorias[$i]->codigo_categ)->get();
            if (count($Result)>0) {
                for ($j=0; $j <count($Result) ; $j++) {
                    $List[$i]['tema'][$j]['datosT'] = json_decode($Result[$j]);
                    $contPre = $DB->join('tema', 'categoria.codigo_categ', 'tema.codigo_categ')
                            ->join('pregunta', 'tema.id_tem', '=', 'pregunta.id_tem')
                            ->where('tema.id_tem', '=', $Result[$j]->id_tem)->get()->count();
                    $List[$i]['tema'][$j]['contPreg'] = $contPre;
                }
            }else if(count($Result) == 0){
                $List[$i]['tema'] = null;
            }
        }
        //  dd($List);
        return $List;
    }
}
