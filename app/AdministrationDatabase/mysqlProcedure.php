<?php
namespace App\Modulos;

use Illuminate\Support\Facades\DB;

class Mysql
{
    public function InsertTabla($tabla, $array)
    {
        DB::table($tabla)->insert($array);
    }

    public function SelectTable($tabla)
    {
        return DB::table($tabla)->get();
    }

}
