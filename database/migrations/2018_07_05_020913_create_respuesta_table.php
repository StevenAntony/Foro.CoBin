<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            // $table->increments('id_resp');
            $table->char('codigo_resp', 10)->primary();
            $table->char('codigo_pre', 10);
            $table->unsignedInteger('user_id');
            $table->text('descripcion_resp');
            $table->text('descripcionCode__resp')->nullable();
            $table->date('fecha_resp');
            $table->time('hora_resp');
            $table->string('estado_resp', 10);
            $table->integer('valoracion_resp');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('codigo_pre')->references('codigo_pre')->on('pregunta');

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
        Schema::dropIfExists('respuesta');
    }
}
