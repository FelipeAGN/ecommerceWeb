<?php

use Illuminate\Support\Facades\Route;

/*Libros*/
Route::get('/books', 'libroController@index');          //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById');  //obtiene un solo libro
Route::post('/books', 'libroController@store');         //Guarda un libro
Route::put('/books/{id}', 'libroController@update');    //updatea properties de un libro
Route::get('/newbooks', 'libroController@getNewestBooks');          //retorna una colección de libros
Route::get('/bestratedbooks', 'libroController@getBestRatedBooks');          //retorna una colección de libros

//comentarios-libro//
Route::get('/books/{id}/comentarios', 'comentarioController@getComments');         //Obtiene los comentarios de un libro {id}
Route::post('/books/{id}/comentario', 'comentarioController@storeComment');         //Agrega un comentario a un libro {id}

/* carrito */
Route::post('/crearCarritoConLibro', 'carritoController@createCarritoConLibro');
Route::get('/carritos', 'carritoController@index');

/* User */
Route::post('/crearusuario', 'userController@create');                                              //updatea properties de un libro
Route::post('/libroAcarrito', 'userController@agregarLibro');                                 //updatea properties de un libro
Route::delete('/pagar', 'userController@ingresarPago');                                 //updatea properties de un libro
Route::get('/carrito', 'userController@obtenerTotalPago');                                 //updatea properties de un libro

//not ok
Route::put('/disminuirlibro', 'carritoController@disminuirLibro');                                 //updatea properties de un libro
Route::put('/aumentarlibro', 'carritoController@aumentarLibro');                                    // aumenta en 1 el libro
Route::delete('/quitarcarrito/{id}', 'carritoController@quitarLibro');                                    // aumenta en 1 el libro


// CArrito only -> ok//
Route::get('/carrito/{id}', 'carritoController@obtenerCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/total', 'carritoController@obtenerTotalCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/estado', 'carritoController@obtenerEstadoCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/cantlibros', 'carritoController@obtenerCantidadLibrosCarrito');                                 //updatea properties de un libro

//categoria-libro//
Route::post('/books/categorias', 'categoriaController@storeCategory');                 //Agrega una categoria a la bd // OK
Route::get('/categorias', 'categoriaController@getAllCategories');                //retorna todas las categorias de libros que ofrece la tienda //OK
Route::get('/categoria/{id}', 'categoriaController@getBooksOfCategory');                //retorna una categoria y sus dat//os //OK

/*Mensajes de contacto para administrador*/
Route::post('/contacto', 'contactoController@create');                 //Agrega una categoria a la bd // OK






