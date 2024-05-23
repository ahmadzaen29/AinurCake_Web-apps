<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->increments('id_pengeluaran');
            $table->date('tgl_pengeluaran');
            $table->integer('jumlah');
            $table->integer('id_sumber')->unsigned();
            $table->string('deskripsi', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
