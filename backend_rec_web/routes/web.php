<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Libros*/
Route::get('/books', 'libroController@index');          //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById');  //obtiene un solo libro
Route::post('/books', 'libroController@store');         //Guarda un libro
Route::put('/books/{id}', 'libroController@update');    //updatea properties de un libro
Route::get('/newbooks', 'libroController@getNewestBooks');          //retorna una colección de libros
Route::get('/bestratedbooks', 'libroController@getBestRatedBooks');          //retorna una colección de libros
/*
*/

//comentarios-libro//
Route::get('/books/{id}/comentarios', 'comentarioController@getComments');         //Agrega un comentario a un libro
Route::post('/books/{id}/comentario', 'comentarioController@storeComment');         //Agrega un comentario a un libro


//Route::post('/books/{id}/categoria', 'categoriaController@setCategoryOnBook');         // Setea al libro con {id} una categoria
//Route::get('/books/{id}/categorias', 'categoriaController@getCategory');                //obtiene las categorias de un libro {id}
//Route::get('/books/categoria/{id}', 'categoriaController@getAllBooksCategory');         //retorna todos los libros con relacionados a la categoria con id {id}

/* User y carrito */
Route::post('/crearCarritoEmpty', 'carritoController@create');                                              //updatea properties de un libro

Route::post('/crearusuario', 'userController@create');                                              //updatea properties de un libro
Route::post('/libroAcarrito', 'userController@agregarLibro');                                 //updatea properties de un libro
Route::get('/totalpagar/{rut}', 'userController@obtenerTotalPago');                                 //updatea properties de un libro
Route::put('/pagar/{rut}', 'userController@ingresarPago');                                 //updatea properties de un libro

//not ok
Route::put('/lesslibro/{id}', 'userController@disminuirLibro');                                 //updatea properties de un libro
Route::put('/morelibro/{id}', 'userController@aumentarLibro');                                    // aumenta en 1 el libro

Route::get('/carrito/lastCreated', 'carritoController@obtenerUltimoCarrito');                                 //updatea properties de un libro

// CArrito only -> ok//
Route::get('/carrito/{id}', 'carritoController@obtenerCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/total', 'carritoController@obtenerTotalCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/estado', 'carritoController@obtenerEstadoCarrito');                                 //updatea properties de un libro
Route::get('/carrito/{id}/cantlibros', 'carritoController@obtenerCantidadLibrosCarrito');                                 //updatea properties de un libro


//categoria-libro//
Route::post('/books/categorias', 'categoriaController@storeCategory');                 //Agrega una categoria a la bd // OK
Route::get('/categorias', 'categoriaController@getAllCategories');                //retorna todas las categorias de libros que ofrece la tienda //OK
//Route::get('/categoria/{id}', 'categoriaController@getCategory');                //retorna una categoria y sus datos //OK
Route::get('/categoria/{id}', 'categoriaController@getBooksOfCategory');                //retorna una categoria y sus dat//os //OK
