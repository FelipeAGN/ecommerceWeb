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

            $table->id('id');

            $table->foreignId('rut');
            $table->foreignId('id_book');
            $table->timestamps(0);
            $table->integer('cantidad_libros');
            $table->integer('libro_total');


            //$table->unique('rut','id_book');

            $table->foreign('rut')->references('rut')->on('users')->onDelete('cascade');
            $table->foreign('id_book')->references('id_book')->on('libros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro-carritos');
    }
}
