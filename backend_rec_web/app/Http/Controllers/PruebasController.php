<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function testOrm(){
        $products = Product::all();
        $categories = Category::all();
        foreach ($products as $p){
            echo "<h1>".$p->name."</h1>";
            echo "<h3>{$p->category->name}</h3>";
          //  echo "<h3>".$p->category->name."</h3>";
            echo "<p>".$p->description."</p>";
            echo "<hr>";
        }
        foreach ($categories as $c){
            echo "<h3>".$c->name."</h3>";
        }
    }
}
