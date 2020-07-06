<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Libro;
use App\libro_carrito;
use Illuminate\Http\Request;

class carritoController extends Controller
{

    public function storeCarrito(){ //ok

        $carro = new Carrito();
        $carro->total = request('total');
        $carro->created_at = now();
        $carro->updated_at = now();
        $carro->comprado = false; //LA BD LO ALMACE COMO 0, CUANDO CAMBIA A TRUE, LA BD LO CAMBIA A 1
        $carro->rut = request('rut');


        return $carro->save();
    }


    public function storeCarritoConProducto(Request $request){ //ok

        request()->validate([
           "id_book" => 'required'
        ]);

        $id = $request->get('id_book');

        $libroInDb = Libro::where('id_book',$id)->firstOrFail();

        if(! $libroInDb){
           return abort(404);
        }
        $carro = new Carrito();

        $carro->total = $libroInDb->price;
        $carro->created_at = now();
        $carro->updated_at = now();
        $carro->comprado = false; //LA BD LO ALMACE COMO 0, CUANDO CAMBIA A TRUE, LA BD LO CAMBIA A 1
        $carro->rut = 199408607;

        $carrito_buffer= $carro->save();

        //$id_carrito_nuevo = Carrito::where('id_carrito',$carrito_buffer);

        $relacion = new libro_carrito();
        $relacion->id_carrito = $carrito_buffer->id_carrito;
        $relacion->id_book = $request->get("id_book");
        $relacion->created_at = now();
        $relacion->updated_at = now();
        $relacion->cantidad_libro = 1;

    }

    public function getCarritos(){ //ok para testear
        return Carrito::all();
    }

    public function addProductoToCarrito(Request $request, $id_carrito){

        request()->validate([
           'id_boook' => 'required'
        ]);

        $id_book = $request->get('id_book');
        $libro = Libro::where('id_book',$id_book)->firstOrFail();
        if(! $libro){
            return abort(404);
        }
        $relacion = new libro_carrito();
        $relacion->id_carrito = $id_carrito;
        $relacion->id_book = $request->get("id_book");
        $relacion->created_at = now();
        $relacion->updated_at = now();
        $relacion->cantidad_libro = 1;

        return $relacion->save();
    }



    public function getProductosCarrito(){

    }

    public function getTotalCarrito($id){ //ok
        $carro = Carrito::where('id_carrito',$id)->firstOrFail();
        return $carro->total;
    }

    public function pagarCarrito($id){ //ok

        $carro = Carrito::where('id_carrito',$id)->firstOrFail();

        if(! $carro || $carro->comprado==true){
            return abort(404);
        }
        $carro->comprado = true;
        return $carro->save();
    }



    public function getUserCarrito($id){
        $carro = Carrito::where('id_carrito',$id)->firstOrFail();
        /*SE PUEDE AMPLIAR ESTE METODO A RETORNAR EL OBJETO USUARIO COMPRADOR*/

        return $carro->rut;
    }

    public function updateProductosyPrecioCarrito(){

    }
    //
}
