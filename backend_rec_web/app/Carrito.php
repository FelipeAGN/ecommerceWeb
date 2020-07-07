<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';
    protected $primaryKey= 'id';


    public function obtenerCarrito($id){
        $carrito =Carrito::where('id',$id)->firstOrFail();//->where('rut',$request->rut);
        return $carrito;
    }

    public function obtenerCarritoPorRut($rut){
        $carrito =Carrito::where('rut',$rut)->firstOrFail();//->where('rut',$request->rut);
        return $carrito;
    }

    public function obtenerCantidadLibros($id){
        $carrito =Carrito::where('id',$id)->firstOrFail();//->where('rut',$request->rut);
        return $carrito->cantidad_libros;
    }

    public function obtenerTotalCarrito($id){
        $carrito =Carrito::where('id',$id)->firstOrFail();//->where('rut',$request->rut);
        return $carrito->libro_total;
    }

    public function obtenerEstadoCarrito($id){
        $carrito =Carrito::where('id',$id)->firstOrFail();//->where('rut',$request->rut);
        return $carrito->comprado;
    }



}
