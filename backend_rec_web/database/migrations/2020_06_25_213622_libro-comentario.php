<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibroComentario extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_comentarios', function (Blueprint $table) {

            $table->foreignId('id_comment');
            $table->foreign('id_comment')->references('id_comment')->on('comentarios');

            $table->foreignId('id_book');
            $table->foreign('id_book')->references('id_book')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_comentarios');
    }


}
