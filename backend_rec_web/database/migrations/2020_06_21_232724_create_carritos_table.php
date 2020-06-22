<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id_carrito');

            $table->double('total');
            $table->timestamps(0);

            //$table->bigInteger('user_id')->unsigned();
            //$table->foreign('user_id')->references('id_user')->on('users');

            //$table->bigInteger('id_book')->unsigned();
            //$table->foreign('id_book')->references('id_book')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
