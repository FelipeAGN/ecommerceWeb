<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //

    protected $table = 'libros';
    protected $primaryKey= 'id_book';

    protected $fillable = ['title','description','stock','price'];
}
