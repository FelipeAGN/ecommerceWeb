<?php

use Illuminate\Support\Facades\Route;


//goods

/* Libros*/
Route::get('/books', 'libroController@index');          //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById');  //obtiene un solo libro
Route::post('/books', 'libroController@store');         //Guarda un libro
Route::put('/books/{id}', 'libroController@update');    //updatea properties de un libro

//comentarios-libro//
Route::get('/books/{id}/comentarios', 'comentarioController@getComments');         //Agrega un comentario a un libro
Route::post('/books/{id}/comentario', 'comentarioController@storeComment');         //Agrega un comentario a un libro
/*
//carrito-libro//
Route::post('/books/{id}/comentario', 'libroController@storeComment');         //Agrega un comentario a un libro
Route::get('/books/{id}/comentarios', 'libroController@getComments');         //Agrega un comentario a un libro
*/
//categoria-libro//
Route::post('/books/{id}/categoria', 'libroController@storeComment');         //Agrega un comentario a un libro
Route::get('/books/{id}/categorias', 'libroController@getComments');         //Agrega un comentario a un libro

/* ENd of libros*/


/* CArrito*/

/* Usuarios*/


/* Categorias*/


/* comentarios*/


//Route::get('/books/{id}/edit', 'libroController@edit');    //updatea properties de un libro


//Route::post('registro', 'Auth\registroController@register');

