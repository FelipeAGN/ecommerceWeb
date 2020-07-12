<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Libro;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(Request $request)
    {
        request()->validate([
            'rut' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $user = new User();

        $user->rut = $request->rut;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->created_at = now();
        $user->updated_at = now();
        $user->address = $request->address;

        $carritos = Carrito::all()->where('rut',$user->rut);

        foreach ($carritos as $carrito_deuda) {
            $carrito_deuda->rut = $user->rut;
            $carrito_deuda->save(); //se guarda el cambio de estado del carrito[i]
        }

        $user->save();
        return;
    }

    /*
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
    }*/


    public function obtenerTotalPago()
    {
        $carrito_con_deuda = Carrito::where('comprado',0)->get();

        $monto_a_pagar = 0;

        foreach ($carrito_con_deuda as $carrito) {
            $monto_a_pagar += $carrito->libro_total;
        }
        return $monto_a_pagar;
    }

    public function ingresarPago()
    {
        $carrito_con_deuda = Carrito::all();

        foreach ($carrito_con_deuda as $carrito) {
            $carrito->delete();
        }
        return true;
    }







}
