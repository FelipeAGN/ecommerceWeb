<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id_book');
            $table->double('price');
            $table->integer('stock');



            $table->timestamps(0);
            $table->string('title',255);
            $table->string('description',255);
            //$table->bigInteger('category_id')->unsigned();
            //$table->foreign('id_category')->references('id_category')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
