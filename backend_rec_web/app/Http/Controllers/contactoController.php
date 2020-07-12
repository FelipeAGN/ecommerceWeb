<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function create(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mensaje_contacto = new Contacto();

        $mensaje_contacto->email= $request->email;
        $mensaje_contacto->subject= $request->subject;
        $mensaje_contacto->message= $request->message;
        $mensaje_contacto->created_at=now();
        $mensaje_contacto->updated_at =now();

        return $mensaje_contacto->save();
    }
    //
}
