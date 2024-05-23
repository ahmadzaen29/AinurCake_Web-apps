<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopUsersRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_users_registrations', function (Blueprint $table) {
            $table->increments('users_id');
            $table->string('users_username', 100);
            $table->string('users_email', 150);
            $table->string('users_password', 100);
            $table->string('hint', 100);
            $table->string('users_mobile', 50);
            $table->string('users_address', 200);
            $table->mediumInteger('code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_users_registrations');
    }
}
