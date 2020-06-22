<?php

use Illuminate\Support\Facades\Route;


//goods
Route::get('books', 'libroController@index');
Route::get('books/{id}', 'libroController@showById');

//bads
Route::post('books/newbook', 'libroController@store');
Route::put('books/update/{id}', 'libroController@update');
Route::delete('books/delete/{id}', 'libroController@delete');


//Route::post('registro', 'Auth\registroController@register');

