<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopProductTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name', 100);
            $table->integer('product_category')->unsigned();
            $table->string('product_price', 100);
            $table->string('unit', 50);
            $table->string('product_description', 300);
            $table->string('product_image', 300);
            $table->timestamps();

            $table->foreign('product_category')->references('category_id')->on('cake_shop_category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_product');
    }
}