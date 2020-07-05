<?php

use Illuminate\Support\Facades\Route;


//goods

/* Libros*/
Route::get('/books', 'libroController@index');          //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById');  //obtiene un solo libro
Route::post('/books', 'libroController@store');         //Guarda un libro
Route::put('/books/{id}', 'libroController@update');    //updatea properties de un libro
Route::get('/newbooks', 'libroController@getNewestBooks');          //retorna una colección de libros
Route::get('/bestratedbooks', 'libroController@getBestRatedBooks');          //retorna una colección de libros



//Route::get('/books/newest', 'libroController@getNewestBooks');          //retorna una colección de los ultimos 8 libros añadidos libros


//comentarios-libro//
Route::get('/books/{id}/comentarios', 'comentarioController@getComments');         //Agrega un comentario a un libro
Route::post('/books/{id}/comentario', 'comentarioController@storeComment');         //Agrega un comentario a un libro

//categoria-libro//
Route::post('/books/categorias', 'categoriaController@storeCategory');                 //Agrega una categoria a la bd // OK
Route::get('/categorias', 'categoriaController@getAllCategories');                //retorna todas las categorias de libros que ofrece la tienda //OK
Route::get('/categoria/{id}', 'categoriaController@getCategory');                //retorna una categoria y sus datos //OK


//Route::post('/books/{id}/categoria', 'categoriaController@setCategoryOnBook');         // Setea al libro con {id} una categoria
//Route::get('/books/{id}/categorias', 'categoriaController@getCategory');                //obtiene las categorias de un libro {id}
//Route::get('/books/categoria/{id}', 'categoriaController@getAllBooksCategory');         //retorna todos los libros con relacionados a la categoria con id {id}



/*
//carrito-libro//
Route::post('/books/{id}/comentario', 'libroController@storeComment');         //Agrega un comentario a un libro
Route::get('/books/{id}/comentarios', 'libroController@getComments');         //Agrega un comentario a un libro
*/


/* ENd of libros*/


/* CArrito*/

/* Usuarios*/


/* Categorias*/


/* comentarios*/


//Route::get('/books/{id}/edit', 'libroController@edit');    //updatea properties de un libro


//Route::post('registro', 'Auth\registroController@register');

