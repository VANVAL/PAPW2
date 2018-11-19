<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->string('cover')->default('default.jpg');
            $table->string('password');
            $table->rememberToken();
            $table->date('FechNac')->default('2000-01-01');
            $table->string('desc')->default('Soy Chidori');
            $table->string('gender')->default('Other');
            //$table->string('artist')->default('No specificated');
           // $table->date('FechNac');
            //$table->binary('ImgPortada');
            //$table->binary('ImgPerfil');
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
        Schema::dropIfExists('users');
    }
}
