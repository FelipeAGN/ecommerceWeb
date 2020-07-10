<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\libro_categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{

    public function getCategories($id)
    {
        return libro_categoria::all()->where('id_book',$id);
    }

    public function getAllCategories()
    {
        return Categoria::all();
    }

    public function getCategory($id)
    {
        return Categoria::where('id_category',$id)->firstOrFail();
    }


    public function storeCategory(){

        request()->validate([
            'description' => 'required',
            'name' => 'required',
        ]);

        $categoria = new Categoria();

        $categoria->description = request('description');
        $categoria->name = request('name');
        $categoria ->created_at = now();
        $categoria ->updated_at = now();

        return $categoria->save();
    }

    public function getBooksOfCategory($id){
        $librosEnCategoria = libro_categoria::all()->where('id_category',$id);

        if(! $librosEnCategoria){
            return abort(404);
        }

        return $librosEnCategoria;
    }
}
