<?php
namespace App\AdministrationDatabase;

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

        $Result = $BD->where('codigo_cat','like','L%')
                                        ->get();
        $List['Lenguajes'] = $Result;
        $Result = $BD->where('codigo_cat','like','B%')
                                        ->get();
        $List['BaseDatos'] = $Result;
        $Result = $BD->where('codigo_cat','like','S%')
                                        ->get();
        $List['SistOper'] = $Result;
        $Result = $BD->where('codigo_cat','like','H%')
                                        ->get();
        $List['Herramientas'] = $Result;
        // var_dump($List['Lenguajes']);
        // die();

        return $List;
    }

    public function SearchThemeInCategory($Category,$theme)
    {
        $BD = new Categoria;

        $Result = $BD->join('tema', 'categoria.codigo_cat','=', 'tema.codigo_cat')->where('categoria.nombre_cat', '=', $Category)
            ->where('tema.nombre_tem', '=', $theme)
            ->get();
            // ->count();
        // dd(count($Result));

        return $Result;
    }

    public function BuscarCategoria($obj)
    {
        $BD = new Categoria;
        $Result = $BD->where('nombre_cat','=',$obj)->get();
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
                    ->join('tema','pregunta.codigo_tem','=', 'tema.codigo_tem')
                    ->join('categoria','tema.codigo_cat','=','categoria.codigo_cat')
                    ->select('pregunta.codigo_pre', 'users.name', 'pregunta.titulo_pre', 'pregunta.created_at', 'categoria.nombre_cat')
                    ->orderByRaw('pregunta.created_at DESC')
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
        $usuarios = $BD->join('detalleuser','detalleuser.user_id','=','id')->orderByRaw('detalleuser.puntaje_dus DESC')
        ->get();
        return $usuarios;
    }

    public function ListarNewTema()
    {
        $List = [
            'data' => [],
            'contPre' => []
        ];

        $DB = new Categoria;
        $DBT = new Tema;

        // select * from tema inner join categoria  on tema.codigo_cat = categoria.codigo_cat WHERE tema.estado_tem = 'nuevo'
        $tema = $DB->join('tema', 'categoria.codigo_cat', '=', 'tema.codigo_cat')
                        ->where('tema.estado_tem' ,'=' ,'nuevo')
                        // ->select('tema.codigo_tem')
                        ->get();
        // dd($tema);
        // select count(*) from pregunta p inner join tema t on p.codigo_tem = t.codigo_tem where t.codigo_tem = 'LJAR003'
        foreach ($tema as $t) {
            array_push($List['data'],$t);
            $countPre = $DBT->join('pregunta','tema.codigo_tem','=','pregunta.codigo_tem')
                            ->where('tema.codigo_tem','=',$t->codigo_tem)->count();
            array_push($List['contPre'], $countPre);
        }
        // dd($List);
        return $List;
    }
}
