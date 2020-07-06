<?php

use Illuminate\Support\Facades\Route;

/*Libros*/
Route::get('/books', 'libroController@index');          //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById');  //obtiene un solo libro
Route::post('/books', 'libroController@store');         //Guarda un libro
Route::put('/books/{id}', 'libroController@update');    //updatea properties de un libro
Route::get('/newbooks', 'libroController@getNewestBooks');          //retorna una colección de libros
Route::get('/bestratedbooks', 'libroController@getBestRatedBooks');          //retorna una colección de libros
/*       */

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

//Carro de compras//
Route::post('/carrocompras', 'carritoController@storeCarrito');                                      //OK
Route::get('/carrocompras', 'carritoController@getCarritos');                                       //OK
Route::get('/carrocompras/{id}/usuario-carro', 'carritoController@getUserCarrito');                 //OK
Route::patch('/carrocompras/{id}/pagar-carro', 'carritoController@pagarCarrito');
Route::get('/carrocompras/{id}/total-carro', 'carritoController@getTotalCarrito');                   //OK

//Route::post('/carrocompras/{id}/agregar-producto', 'carritoController@addProductoToCarrito');                  //updatea properties de un libro
Route::post('/carrocompras/agregar-producto', 'carritoController@storeCarritoConProducto');         //updatea properties de un libro

Route::post('/crearusuario', 'userController@create');                                              //updatea properties de un libro
Route::post('/agregarLibroAcarrito', 'userController@agregarLibro');                                 //updatea properties de un libro

/*
Route::get('/carrocompras/{id}/productos', 'carritoController@getProductosCarrito');                   //retorna todas las categorias de libros que ofrece la tienda //OK

Route::patch('/carrocompras/{id}/', 'libroController@modificarProductoCarrito');         //updatea properties de un libro
*/

/*
//carrito-libro//
Route::post('/books/{id}/comentario', 'libroController@storeComment');         //Agrega un comentario a un libro
Route::get('/books/{id}/comentarios', 'libroController@getComments');         //Agrega un comentario a un libro
*/


