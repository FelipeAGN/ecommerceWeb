<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class oioCreateCarritosTable extends Migration
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

            $table->foreignId('rut')->unsigned();
            $table->foreign('rut')->references('rut')->on('users');

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
