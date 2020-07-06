<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Libro;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(Request $request){
        request()->validate([
            'rut' => 'required'
        ]);

        $user = new User();
        $user->rut = $request->rut;
        $user->fullname = $request->fullname;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->created_at = now();
        $user->updated_at = now();
        $user->address = $request->address;

        $user->save();
        return ;
    }

    public function agregarLibro(Request $request)
    {
        $libro = Libro::where('id_book', $request->id_book)->firstOrFail();
        $carrito = new Carrito();

        $carrito->rut = $request->rut;
        $carrito->id_book = $request->id_book;
        $carrito->libro_total = $libro->price * $request->cantidad_libros;
        $carrito->cantidad_libros = $request->cantidad_libros;
        $carrito->created_at = now();
        $carrito->updated_at = now();

        return $carrito->save();
    }


    public function quitarLibro(){

    }

}
