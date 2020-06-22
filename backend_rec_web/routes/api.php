<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::group([

],function ($router){

   Route::get('libros','libroController@getLibros');
   Route::post('libros','libroController@newLibro');
   Route::delete('/libros','libroController@deleteLibro');
   //Route::get('/libros','libroController@getLibros');
});
*/
Use App\Libro;

Route::get('books', 'LibroController@index');
Route::get('books/{id}', 'LibroController@show');
Route::post('books', 'LibroController@store');
Route::put('books/{id}', 'LibroController@update');
Route::delete('books/{id}', 'LibroController@delete');


Route::post('registro', 'Auth\registroController@register');

