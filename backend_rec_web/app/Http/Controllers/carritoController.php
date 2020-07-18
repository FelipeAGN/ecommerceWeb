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

        $libro = Libro::where('id_book', $request->id_book)->firstOrFail();

        $carrito = new Carrito();
        $carrito->id_book = $request->id_book;
        $carrito->cantidad_libros=1;

        $carrito->libro_total=$libro->price;
        $carrito->nombre_libro = $libro->title;

        $carrito->created_at = now();
        $carrito->updated_at = now();

        return $carrito->save();
    }


    public function disminuirLibro(Request $request)
    {
        $carrito = Carrito::where('id', $request->id)->firstOrFail();

        $libro = Libro::where('id_book', $request->id_book)->firstOrFail();

        $carrito->cantidad_libros--;
        $carrito->libro_total = $carrito->cantidad_libros * $libro->price;

        return $carrito->save();
    }

    public function aumentarLibro(Request $request)
    {
        $carrito = Carrito::where('id',$request->id)->firstOrFail();

        $libro = Libro::where('id_book',$request->id_book)->firstOrFail();

        $carrito->cantidad_libros++;
        $carrito->libro_total= $carrito->cantidad_libros * $libro->price;

        return $carrito->save();
    }

    public function quitarLibro($id_carrito)
    {
        $carrito = Carrito::where('id',$id_carrito)->firstOrFail();

        return $carrito->delete();
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
