<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCakeShopOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('cake_shop_orders', function (Blueprint $table) {
            $table->integer('users_id')->unsigned()->change();
            $table->foreign('users_id')->references('users_id')->on('cake_shop_users_registrations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_orders');
    }
}
