<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadwalMatakuliahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->string('matakuliah');
            
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
        Schema::drop('jadwal_matakuliahs');
    }
}
