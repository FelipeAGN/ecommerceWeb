<?php

namespace App;

//use App\Category;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';

    public function category(){
        //'cada producto le pertenece a una categoria'
        return $this->belongsTo('App\Category', 'category_id');
    }
}
