<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('estado');
            $table->string('direccion');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('punto_referencia');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('solicitudes');
    }
}
