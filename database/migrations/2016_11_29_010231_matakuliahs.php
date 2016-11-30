<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matakuliahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_mk');
            $table->string('nama_mk');
            
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
        Schema::drop('matakuliahs');
    }
}
