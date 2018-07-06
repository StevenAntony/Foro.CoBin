<?php
namespace App\Procedure;

use Illuminate\Support\Facades\DB;
use App\Categoria;

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

        return $List;
    }

}
