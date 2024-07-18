<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.product', [
            'products' => $products,
            'categories' => $categories

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * name - Название
     * price - Цена
     * image - Изображение
     * comment - Описание
     * count_in - Количество в порции
     * kkal - Ккал
     * squirrels - Белки
     * fats - Жиры
     * catbohydrates - Углеводы
     * structire - Состав
     * active - Состояние продутка (В стопе/Активно)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.productAdd', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        if ($image) { // был загружен файл изображения
            $path = $image->store('product/images', 'public');
            $base = basename($path);
        }
        else {
            echo 'Изо нету';
        }

        $tempProduct = new Product();
        $tempProduct->name = $request->input('name');
        $tempProduct->price = $request->input('price');
        $tempProduct->image = $base;
        $tempProduct->category_id = $request->category_id;
        $tempProduct->comment = $request->input('comment');
        $tempProduct->count_in = $request->input('count_in');
        $tempProduct->kkal = $request->input('kkal');
        $tempProduct->squirrels = $request->input('squirrels');
        $tempProduct->fats = $request->input('fats');
        $tempProduct->carbohydrates = $request->input('carbohydrates');
        $tempProduct->structure = $request->input('structure');

//        $tempProduct['data'] = $request->all();
//        $tempProduct->image = $base;
        $tempProduct->save();
        return redirect()->back()->withSuccess('Продукт был успешно добавлен.');
        //dump($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
