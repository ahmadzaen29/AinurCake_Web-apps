<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumberTable extends Migration
{
    public function up()
    {
        Schema::create('sumber', function (Blueprint $table) {
            $table->increments('id_sumber');
            $table->string('nama', 40);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sumber');
    }
}