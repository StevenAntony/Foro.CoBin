<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            // $table->increments('id_pre');
            $table->char('codigo_pre', 10)->primary();
            $table->char('codigo_tem', 10);
            $table->unsignedInteger('user_id');
            $table->string('titulo_pre', 70);
            $table->text('descripcion_pre');
            $table->text('descripcionCode_pre')->nullable();
            $table->string('estado_pre', 10);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('codigo_tem')->references('codigo_tem')->on('tema');
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
        Schema::dropIfExists('pregunta');
    }
}
