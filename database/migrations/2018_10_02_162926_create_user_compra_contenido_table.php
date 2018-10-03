<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCompraContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_compra_contenido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserCompra_id')->unsigned();
            $table->integer('ContCompra_id')->unsigned();

            $table->string('Descripcion');
            $table->integer('Cantidad');
            $table->dateTime('FechaCompra');
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
        Schema::dropIfExists('user_compra_contenido');
    }
}
