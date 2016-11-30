<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FasilitasProdis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('fasilitas_prodis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jumlah');
            $table->timestamps();
            $table->softDeletes();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fasilitas_prodis');
    }
}
