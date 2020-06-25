<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //

    protected $table = 'libros';
    protected $primaryKey= 'id_book';

  //  protected $fillable = ['id_book','price','title','description','stock', 'category_id'];


/*

    public function categorias(){
        //'cada categoria tiene muchos productos'
        return $this->hasMany('App\Categoria');
    }
*/

}
