<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //para acceder a la bd se usa ORM que es una capa de abstraccion que nos ayuda a interpretar
    //los datos de la bd como un objeto, y ofrece metodos para acceder a ellos

    //documentacion: https://laravel.com/docs/4.2/eloquent#introduction

    // table almacena la el nombre de la table de la base de datos
    protected $table = 'categories';

    //Relacion de uno a muchos
    public function products(){
        //'cada categoria tiene muchos productos'
        return $this->hasMany('App\Product');
    }
}
