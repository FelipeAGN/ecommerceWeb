<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class libro_comentariosController extends Controller
{
    public function getComments($id){

    }

    //$id = id del libro
    public function storeComment($id){
        request()->validate([
            'id_book' => 'required',
        ]);

        $comentario = new Comentario();

        $comentario->id_book = request('id_book');

        $comentario->text = request('text');
        $comentario->rating = request('rating');
        $comentario->commented_by = request('commented_by');
        $comentario ->created_at = now();
        $comentario ->updated_at = now();



        return $comentario->save();

    }


    //
}
