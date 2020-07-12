<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function create(Request $request)
    {
        request()->validate([
            'mail' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        $mensaje_contacto = new Contacto();

        $mensaje_contacto->email= $request->mail;
        $mensaje_contacto->subject= $request->subject;
        $mensaje_contacto->message= $request->body;

        /*
                $user->rut = $request->rut;
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->created_at = now();
                $user->updated_at = now();
                $user->address = $request->address;

                $user->save();*/
        return $mensaje_contacto->save();
    }
    //
}
