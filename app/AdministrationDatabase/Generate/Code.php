<?php
namespace App\AdministrationDatabase\Generate;

use Illuminate\Support\Facades\DB;

class Code
{
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
}