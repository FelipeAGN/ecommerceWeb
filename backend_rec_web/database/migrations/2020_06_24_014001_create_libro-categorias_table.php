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
            $table->foreignId('id_book');
            $table->foreign('id_book')->references('id_book')->on('libros');

            $table->foreignId('id_category');
            $table->foreign('id_category')->references('id_category')->on('categorias');

            //$table->foreignId('')

                 //$table->bigInteger('user_id')->unsigned();
            //$table->foreign('user_id')->refereces('id_user')->on('users');
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
