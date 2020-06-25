<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class libroController extends Controller
{

    public function index()
    {
        return Libro::all();
    }

    public function showById($id)
    {
        return Libro::where('id_book',$id)->firstOrFail();
    }


    public function store(){

        request()->validate([
            'price' => 'required',
            'title' => 'required',
            'stock' => 'required',
            'rating' => 'required',
            'url_image' => 'required',
            'description' => 'required',
        ]);

        $libro = new Libro();

        $libro->price = request('price');
        $libro ->stock = request('stock');
        $libro ->title = request('title');
        $libro ->description = request('description');
        $libro ->created_at = now();
        $libro ->updated_at = now();
        $libro ->rating = request('rating');
        $libro ->url_image = request('url_image');


        return $libro->save();
    }
    /*
    public function edit($id){

        $libro = Libro::find($id);
    }*/


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
    }






}
