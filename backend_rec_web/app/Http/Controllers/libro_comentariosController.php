<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class libro_comentariosController extends Controller
{
    public function getComments($id){

    }

    public function storeComment($id){
        request()->validate([
            'id_book' => 'required',
        ]);

        $comentario = new Comentario();

        $comentario->id_book = request('id_book');

        return $comentario->save();

    }


    //
}
