<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 

    public function index(){
         $categories = Category::all();
        $products = Product::all();
         return view('home', compact('categories','products'));
    }
}
