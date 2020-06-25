<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Libro;
use Illuminate\Http\Request;

class comentarioController extends Controller
{
    public function getComments($id)
    {
        return Comentario::all()->where('id_book',$id);
    }
/*
    public function showById($id)
    {
        return Comentario::where('id_book',$id)->firstOrFail();
    }*/


    public function storeComment($id){

        request()->validate([
            'text' => 'required',
            'rating' => 'required',
            'commented_by' => 'required',
        ]);


        $comentario = new Comentario();

        $comentario->text = request('text');
        $comentario ->rating = request('rating');
        $comentario ->commented_by = request('commented_by');
        $comentario->created_at = now();
        $comentario->updated_at = now();
        $comentario->id_book = $id;


        $libro = Libro::where('id_book',$id)->firstOrFail();

        $libro->rating+=$comentario->rating;
        $libro->ratings_done++;
        $libro->save();


        return $comentario->save();
    }
}

/*

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
*/
