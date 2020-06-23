<?php

use Illuminate\Support\Facades\Route;


//goods
Route::get('/books', 'libroController@index'); //retorna una colección de libros
Route::get('/books/{id}', 'libroController@showById'); // un libro solo
Route::post('/books', 'libroController@store');
Route::put('/books/{id}', 'libroController@update');


//Route::post('registro', 'Auth\registroController@register');

