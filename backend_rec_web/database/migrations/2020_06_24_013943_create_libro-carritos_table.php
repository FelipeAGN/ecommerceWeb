<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_carritos', function (Blueprint $table) {

            $table->id('id_relationship');

            $table->foreignId('id_carrito');
            $table->foreignId('id_book');
            $table->timestamps(0);
            $table->unique('id_carrito','id_book');

            $table->foreign('id_carrito')->references('id_carrito')->on('carritos')->onDelete('cascade');
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
