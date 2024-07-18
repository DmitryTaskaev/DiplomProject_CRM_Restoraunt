<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $product = Product::all();
        return view('index.index', ['product' => $product]);
    }
}
