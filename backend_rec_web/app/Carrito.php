<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
    public function libros(){
        return $this->hasMany('App\Libro');
    }
    //
}
