<?php
namespace App\AdministrationDatabase\Generate;

use Illuminate\Support\Facades\DB;
use App\AdministrationDatabase\Generate\Funtions\TypeData;

class Code
{

  // public $typeData = ['Integer', 'String'];

  public function Question($variable1,$variable2,$tipyCode)
  {
    $lyrics = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    $lyrics1 = ['#','$','%','&','/','(',')','=','[',']','{','}','<','>','|','?','¿','@','*','+','-','_','~','^'];
    $number = [1,2,3,4,5,6,7,8,9,0];
    $part = "";
    $part1 = "";
    for ($i=0; $i < strlen($variable1) ; $i++) {
      if ($i < 2) {
        $part = $part."".substr($variable1,$i,1);
      }
    }
    for ($i = 0; $i < strlen($variable2); $i++) {
      if ($i < 2) {
        $part1 = $part1 . "" . substr($variable2, $i, 1);
      }
    }
    $index= $lyrics[array_rand($lyrics)];
    $index1 = $lyrics1[array_rand($lyrics1)];
    $index2 = $number[array_rand($number)];
    $upon = $index."".$tipyCode."".$part."".$part1.$index1.$index2;
    // $upon = $lyrics[array_rand($lyrics)];

    return $upon;
  }

  public function code_key($typeofdata,$limit,$type)
  {
    $cod = new TypeData();
    // // -------------------------
    // $lyricCapital = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    // // -------------------------
    // $lyricTiny = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    // // -------------------------
    // $sign = ['#','$','&','=','[',']','{','}','<','>','|','?','¿','@','*','+','^'];
    // $number = [1,2,3,4,5,6,7,8,9,0];
    if ($limit == 'none') {
      // dd($cod->type($typeofdata));
      if ($type == $cod->type($typeofdata)) {
        $upon = $cod->random_code($type, $typeofdata);
      }else{
        $upon = 'error en el tipo de dato';
      }
    }

    return $upon;
  }
}

// 44246

// 4 * 15  ---  60
// n * c = r
// r >= a  , r = r - a ­^ i ++

