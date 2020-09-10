<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::inRandomOrder()->take(6)->get();
        return view('products.index')->with('products', $products);
    }
}
