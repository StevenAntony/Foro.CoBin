<?php
namespace App\Procedure\Generate;

use Illuminate\Support\Facades\DB;

class Code
{
  public function Question($variable1,$variable2)
  {
    $lyrics = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $part = [];
    $clave = "";
    $upon;
    $upon = $lyrics[array_rand($lyrics)];

    return $upon;
  }
}