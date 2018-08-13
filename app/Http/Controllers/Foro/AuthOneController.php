<?php

namespace App\Http\Controllers\Foro;

use App\AdministrationDatabase\WebProcedure;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Procedure\Generate\Code;
use Illuminate\Http\Request;
use App\Categoria;
use App\Tema;
use App\Pregunta;

class AuthOneController extends Controller
{
    public function PreguntaGen()
    {
        $Execute = new WebProcedure;
        $ObjCat = new Categoria;
        $ObjTem = new Tema;
        $Result = $Execute->ListarCategoria();
        $Categoria = json_encode($ObjCat->get());
        $Tema = json_encode($ObjTem->get());

        return view('pregunta.preguntaGen')->with('selCat',$Categoria)->with('selTem',$Tema)->with('categoria', $Result);
    }
    public function ProcedurePreguntaGen(Request $request)
    {
        $code = new Code;
        $InputCat = $request->selCategory;
        $InputThe = $request->selTheme;
        $InputTit = $request->textTitle;
        $InputDes = $request->textDecription;
        $InputDesCode = $request->textDecriptionCode;
        $codigo = $code->Question($InputThe, Auth::user()->id,'PRE');
        $objPre = new Pregunta;
        $objPre->codigo_pre = $codigo;
        $objPre->codigo_tem = $InputThe;
        $objPre->user_id = Auth::user()->id;
        $objPre->titulo_pre = $InputTit;
        $objPre->descripcion_pre = $InputDes;
        $objPre->descripcionCode_pre = $InputDesCode;
        $objPre->estado_pre ="Activo";
        $objPre->save();

        // dd($codigo);
        return 'a';
    }

    public function PreguntaEspec(REQUEST $request)
    {
        $tem = $request->tema;
        $codigoTem = $request->codigo_Tem;
        $cat = $request->categoria;
        $URL = [
            'nombre' => $tem,
            'codigo' => $codigoTem,
            'categoria' => $cat
        ];
        $Execute = new WebProcedure;
        $Result = $Execute->ListarCategoria();
        return view('pregunta.preguntaEsp')->with('data', $URL)->with('categoria', $Result);
    }

    public function ProcedurePreguntaEsp(Request $request)
    {
        $code = new Code;
        $InputThe = $request->codigo_tem;
        $InputTit = $request->textTitle;
        $InputDes = $request->textDecription;
        $InputDesCode = $request->textDecriptionCode;
        $codigo = $code->Question($InputThe, Auth::user()->id,'PRE');
        $objPre = new Pregunta;
        $objPre->codigo_pre = $codigo;
        $objPre->codigo_tem = $InputThe;
        $objPre->user_id = Auth::user()->id;
        $objPre->titulo_pre = $InputTit;
        $objPre->descripcion_pre = $InputDes;
        $objPre->descripcionCode_pre = $InputDesCode;
        $objPre->estado_pre ="Activo";
        $objPre->save();

        // $querySQL =
        // dd($codigo);
        return 'a';
    }
}
