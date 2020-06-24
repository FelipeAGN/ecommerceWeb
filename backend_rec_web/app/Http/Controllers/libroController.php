<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class libroController extends Controller
{
    /*
    public function index()
    {
        return Libro::all();
    }

    public function showById($id)
    {
        return Libro::where('id_book',$id)->firstOrFail();
    }


    public function store(){
        $libro = new Libro();

        $libro ->id_book = request('id_book');
        $libro->price = request('price');
        $libro ->title = request('title');
        $libro ->description = request('description');
        $libro ->stock = request('stock');
        $libro ->category_id = request('category_id');

        return $libro->save();
    }

    public function update($id){

        //$extractedIdBook = $libro->id_book;

        $libroInDb = Libro::where('id_book',$id)->first();

        $libroInDb->price = request('price');
        $libroInDb ->title = request('title');
        $libroInDb ->description = request('description');
        $libroInDb ->stock = request('stock');

        return $libroInDb->save();
    }*/







}
