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
        return Libro::all()->where('id_book',$id);
    }


    public function store(Request $request)
    {
        $book = Libro::create([
            'price' => $request->price,

        ]);
    }
/*
    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());

        return $libro;
    }

    public function delete(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return 204;
    }*/





}
