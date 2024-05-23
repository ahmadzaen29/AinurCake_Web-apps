<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakeShopAdminRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('cake_shop_admin_registrations', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_username', 100);
            $table->string('admin_email', 150);
            $table->string('admin_password', 100);
            $table->mediumInteger('code');
            $table->string('profile_image', 300);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cake_shop_admin_registrations');
    }
}