<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Libro;
use Illuminate\Http\Request;

class comentarioController extends Controller
{
    public function getComments($id)
    {
        return Comentario::where('id_book',$id)->take(4)->get();
    }

    public function storeComment($id, Request $request){

        request()->validate([
            'text' => 'required',
            'rating' => 'required',
            'commented_by' => 'required',
        ]);

        $comentario = new Comentario();

        $comentario->text = $request->text;
        $comentario ->rating = $request->rating;
        $comentario ->commented_by = $request->commented_by;
        $comentario->id_book = $id;


        $libro = Libro::where('id_book',$id)->firstOrFail();

        $libro->rating+=$comentario->rating;
        $libro->ratings_done++;
        $libro->save();


        return $comentario->save();
    }
}
