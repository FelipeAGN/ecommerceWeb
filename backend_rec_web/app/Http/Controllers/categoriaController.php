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
    /*
    public function edit($id){

        $libro = Libro::find($id);
    }


    public function update($id){

        request()->validate([

            'price' => 'required',
            'title' => 'required',
            'stock' => 'required',
            'rating' => 'required',
            'url_image' => 'required',
            'description' => 'required',
        ]);


        $extractedBook = Libro::where('id_book',$id)->firstOrFail();

        if(! $extractedBook){
            return abort(404);
        }

        // Se actualizan los params de book
        $extractedBook->price = request('price');
        $extractedBook ->stock = request('stock');

        $extractedBook ->title = request('title');
        $extractedBook->description = request('description');

        $extractedBook->updated_at = now();
        $extractedBook->rating = request('rating');
        $extractedBook->url_image = request('url_image');


        return $extractedBook->save();
    }*/

    //
}
