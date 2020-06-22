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

    public function show($id)
    {
        return Libro::find($id);
    }

    public function store(Request $request)
    {
        return Libro::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Libro::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Libro::findOrFail($id);
        $article->delete();

        return 204;
    }
}
