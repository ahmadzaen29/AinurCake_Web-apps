<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name', 100);
            $table->string('category_image', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_category');
    }
}