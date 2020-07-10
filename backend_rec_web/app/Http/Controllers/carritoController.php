<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Libro;
use Illuminate\Http\Request;

class carritoController extends Controller
{
    public function create(){
        $carrito = new Carrito();
        $carrito->created_at = now();
        $carrito->updated_at = now();
        return $carrito->save();
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
