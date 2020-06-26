<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'categorias';
    protected $primaryKey= 'id_category';
    /*
    //Relacion de uno a muchos
    public function libros(){
        //'cada categoria tiene muchos productos'
        return $this->hasMany('App\Libro');
    }

    protected $fillable = [
        'description', 'name_category'
    ];*/
}
