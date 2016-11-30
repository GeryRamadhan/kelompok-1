<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataDosens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dosens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('status');
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
        Schema::drop('data_dosens');
    }
}
