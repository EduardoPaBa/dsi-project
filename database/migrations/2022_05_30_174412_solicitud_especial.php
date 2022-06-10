<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolicitudEspecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicitudespeciales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('estado')->nullable();
            $table->string('link');
            $table->string('description');
            $table->string('direccion');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('punto_referencia');
            $table->string('nombre_adicional');
            $table->string('apellido_adicional');
            $table->integer('telefono');
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
        Schema::dropIfExists('solicitudespeciales');
        
    }
}
