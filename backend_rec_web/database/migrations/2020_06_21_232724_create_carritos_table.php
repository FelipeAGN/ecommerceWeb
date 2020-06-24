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
            $table->id('id_carrito')->autoIncrement();
            $table->double('total');
            $table->timestamps(0);

            $table->boolean('comprado');
            //$table->id('');

            //$table->bigInteger('user_id')->unsigned();
            //$table->foreign('user_id')->refereces('id_user')->on('users');

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
