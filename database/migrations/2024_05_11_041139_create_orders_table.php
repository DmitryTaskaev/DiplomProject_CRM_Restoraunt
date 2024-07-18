<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('courier_id')->nullable();
            $table->integer('price');
            $table->integer('payment');
            $table->string('adress');
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('restaurant_id');
            $table->timestamps();

            $table->foreign('courier_id')->references('id')->on('users');

            $table->foreign('client_id')->references('id')->on('clients');

            $table->foreign('restaurant_id')->references('id')->on('restaurant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
