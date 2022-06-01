<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('catalogoscategorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalogo_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('catalogo_id')->references('id')->on('catalogos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('catalogoscategorias');
    }
}
