<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserComentaContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_comenta_contenido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserComenta_id')->unsigned();
            $table->integer('ContComenta_id')->unsigned();

            $table->string('Comentario');
            $table->dateTime('FechaComentario');
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
        Schema::dropIfExists('user_comenta_contenido');
    }
}
