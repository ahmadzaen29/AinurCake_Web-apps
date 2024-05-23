<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePengeluaranTable extends Migration
{
    public function up()
    {
        Schema::table('pengeluaran', function (Blueprint $table) {
            $table->integer('id_sumber')->unsigned()->change();
            $table->foreign('id_sumber')->references('id_sumber')->on('sumber');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
