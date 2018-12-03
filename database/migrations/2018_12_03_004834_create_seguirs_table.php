<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSeguidor');
            $table->integer('IdSeguido');
            $table->string('comentario');
            $table->string('NomUserSeguido');
            $table->string('AvatarUserSeguido');
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
        Schema::dropIfExists('seguirs');
    }
}
