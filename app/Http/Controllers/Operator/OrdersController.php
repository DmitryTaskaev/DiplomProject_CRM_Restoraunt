<?php

namespace App\Http\Controllers\Operator;

use App\Client;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operators.orders.index', ['orders' => Order::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operators.orders.create', [
            'clients' => Client::all(),
            'products' => Product::all(),
            'couriers' => User::all()
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = 0;
        $prod = Product::all();
        foreach ($request->get('product') as $product){
            foreach ($prod as $p) {
                if($product['product_id'] == $p->id) {
                    $price = $price + ($product['count']) * $p['price'];
                }
            }
        }
        $order = Order::create([
            'client_id' => $request->get('client'),
            'courier_id' => $request->get('courier'),
            'adress' => $request->get('adress'),
            'price' => $price,
            'payment' => $request->get('payment'),
            'restaurant_id' => 1,
            'status' => 1,
        ]);
        foreach ($request->get('product') as $product) {
            $order->products()->attach($product['product_id'], ['count' => $product['count']]);
        }

        return response()->redirectTo('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('operators.orders.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
