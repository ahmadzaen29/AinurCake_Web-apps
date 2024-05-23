<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopOrdersDetailTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_orders_detail', function (Blueprint $table) {
            $table->increments('orders_detail_id');
            $table->integer('orders_id')->unsigned();
            $table->string('product_name', 100);
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('orders_id')->references('orders_id')->on('cake_shop_orders')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_orders_detail');
    }
}