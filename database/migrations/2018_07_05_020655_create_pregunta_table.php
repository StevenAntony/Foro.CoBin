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
            $table->unsignedInteger('id_tem');
            $table->unsignedInteger('user_id');
            $table->string('titulo_pre', 70);
            $table->text('descripcion_pre');
            $table->text('descripcionCode__pre')->nullable();
            $table->date('fecha_pre');
            $table->time('hora_pre');
            $table->string('estado_pre', 10);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_tem')->references('id_tem')->on('tema');
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
