<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRetur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_retur');
            $table->integer('cabang');
            $table->string('stt');
            $table->dateTime('tanggal_kirim')->nullable();
            $table->dateTime('tanggal_terima')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retur');
    }
}
