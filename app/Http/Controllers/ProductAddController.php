<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ProductAddController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('product.productAdd', compact('categories'));
    }
}
