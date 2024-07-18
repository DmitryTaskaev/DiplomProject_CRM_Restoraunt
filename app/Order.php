<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'client_id',
        'courier_id',
        'price',
        'payment',
        'adress',
        'status',
        'restaurant_id'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')->withPivot('count');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function courier() {
        return $this->belongsTo(User::class);
    }
}
