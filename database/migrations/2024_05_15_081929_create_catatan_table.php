<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanTable extends Migration
{
    public function up()
    {
        Schema::create('catatan', function (Blueprint $table) {
            $table->increments('id_catatan');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('catatan');
    }
}