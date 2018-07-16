<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema', function (Blueprint $table) {
            // $table->increments('id_tem');
            $table->char('codigo_tem', 10)->primary();
            $table->char('codigo_cat', 5);
            $table->string('nombre_tem', 50);
            $table->string('estado_tem',10);
            $table->foreign('codigo_cat')->references('codigo_cat')->on('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema');
    }
}
