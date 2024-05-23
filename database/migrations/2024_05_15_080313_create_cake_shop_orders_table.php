<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_orders', function (Blueprint $table) {
            $table->increments('orders_id');
            $table->integer('users_id');
            $table->date('order_date');
            $table->date('delivery_date');
            $table->string('payment_method', 50);
            $table->string('total_amount', 100);
            $table->text('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_orders');
    }
}
