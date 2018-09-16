<?php
namespace App\AdministrationDatabase\Generate\Funtions;

class TypeData
{
  public function type($code){
    $retVal = 0;$typeData = ['Integer', 'String'];
    foreach (range('a','z') as $key => $a) {
      if($retVal == 0){
        $retVal = (strpos($code, $a) == false) ? 0 : 1 ;
      }
    }

    if ($retVal == 0) {
      foreach (range('A','Z') as $key => $a) {
        if($retVal == 0){$retVal = (strpos($code, $a) == false) ? 0 : 1 ;}
      }
    }
    return $typeData[$retVal];
  }

  public function codificar($type , $key , $key2)
  {
    $aBc = range('A', 'z');
    if ($type == 'Integer') {

    }
  }

  public function random_code($type, $key)
  {
    $aBc = range('A', 'z');
    $retCode = '';
    if ($type == 'Integer') {
      for ($i = 0; $i < strlen($key); $i++) {
        $r = substr($key, $i, 1) * random_int(0,50);
        if($r > 57){
            do {
                $r = $r - 57;
            } while ($r   > 57);
        }
        $retCode = $retCode . "" . $aBc[$r];
      }
    }
    return $retCode;
  }

}
