<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titulo');
            $table->string('multimedia');
            $table->string('Descripcion');
            $table->string('Categoria');
            $table->boolean('Draft')->default('0');
            $table->string('ForSale');
            $table->integer('price')->default('0');
            $table->string('hashtag1');
            $table->string('hashtag2');
            $table->string('hashtag3');
            $table->string('hashtag4');
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
        Schema::dropIfExists('contenidos');
    }
}
