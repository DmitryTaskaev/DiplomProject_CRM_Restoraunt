<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        $products = Product::all();
        $orders = Order::all();
        $category = Category::all();
        return view('index', [
            'clients' => $clients,
            'products' => $products,
            'orders' => $orders,
            'category' => $category
        ]);
    }
}
