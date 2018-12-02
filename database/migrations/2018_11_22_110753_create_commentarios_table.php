<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idContenido');
            $table->integer('IdUser');
            $table->string('comentario');
            $table->string('NomUser');
            $table->string('AvatarUser')->default('default.jpg');
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
        Schema::dropIfExists('commentarios');
    }
}
