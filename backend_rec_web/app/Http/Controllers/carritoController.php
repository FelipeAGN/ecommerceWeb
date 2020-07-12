<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Libro;
use Illuminate\Http\Request;

class carritoController extends Controller
{

    public function index(){
        return Carrito::all();
    }

    public function createCarritoConLibro(Request $request){

        $carrito = new Carrito();
        $carrito->id_book = $request->id_book;
        $carrito->cantidad_libros=1;

        $libro = Libro::where('id_book', $request->id_book)->firstOrFail();
        $carrito->libro_total=$libro->price;
        $carrito->nombre_libro = $libro->title;

        $carrito->created_at = now();
        $carrito->updated_at = now();

        return $carrito->save();
    }

    public function disminuirLibro($id) //request me trae ->idbook y ->idcarrito
    {
        $carrito = Carrito::where('id', $id);
        $valorLibro = $carrito->libro_total / $carrito->cantidad_libros;

        $carrito->cantidad_libros--;
        $carrito->libro_total = $valorLibro * $carrito->cantidad_libros;

        if ($carrito->save()) {
            return true;
        }

        return false;
    }




    public function obtenerUltimoCarrito(){
        return $carrito = Carrito::orderBy('created_at','desc')->take(1)->get();
    }

    public function obtenerCarrito($id){
        $carrito = new Carrito();
        return $carrito->obtenerCarrito($id);
    }

    public function obtenerTotalCarrito($id){
        $carrito = new Carrito();
        return $carrito->obtenerTotalCarrito($id);
    }

    public function obtenerEstadoCarrito($id){
        $carrito = new Carrito();
        return $carrito->obtenerEstadoCarrito($id);
    }

    public function obtenerCantidadLibrosCarrito($id){
        $carrito = new Carrito();
        return $carrito->obtenerCantidadLibros($id);
    }



}
