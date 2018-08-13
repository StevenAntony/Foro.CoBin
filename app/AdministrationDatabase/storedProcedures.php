<?php
namespace App\AdministrationDatabase;

use Illuminate\Support\Facades\DB;

class storedProcedures
{
  public function call($chainProcedure,$array)
  {
    $size = count($array);
    $parametros = null;
    $count = 0;
    // foreach ($array as $key => $a) {
    //   $parametros= $parametros."'".$a.(($size - 1 > $count)?"',":"'");
    //   $count ++;
    // }
    // dd($parametros);
    $result = DB::select($chainProcedure,$array);
    return $result;
  }
}
