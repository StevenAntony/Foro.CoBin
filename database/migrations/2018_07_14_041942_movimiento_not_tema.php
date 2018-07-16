<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovimientoNotTema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoNotTema', function (Blueprint $table) {
            $table->increments('id_movNotTem');
            $table->char('codigo_pre', 10);
            $table->unsignedInteger('id_notTem');
            $table->foreign('id_notTem')->references('id_notTem')->on('notificacionTema');
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
        //
    }
}
