<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleUser', function (Blueprint $table) {
            $table->increments('id_detUser');
            $table->unsignedInteger('user_id');
            $table->string('avatar_dus');
            $table->string('ubicacion_dus');
            $table->double('puntaje_dus', 10, 2);
            $table->integer('nivel');
            $table->string('estado',10);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('detalleUser');
    }
}
