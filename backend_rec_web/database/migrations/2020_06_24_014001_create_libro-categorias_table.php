<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_categorias', function (Blueprint $table) {
            $table->id('id_relationship');
            $table->foreignId('id_book');
            $table->foreignId('id_category');
            $table->timestamps(0);
            $table->unique('id_book','id_category');

            $table->foreign('id_book')->references('id_book')->on('libros')->onDelete('cascade');
            $table->foreign('id_category')->references('id_category')->on('categorias')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro-categorias');
    }
}
