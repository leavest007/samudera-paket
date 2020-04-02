<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePickupBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickupbarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_pickup');
            $table->string('kode_pickup');
            $table->string('pengirim');
            $table->string('stt');
            $table->integer('kendaraan');
            $table->string('waktu_berangkat');
            $table->string('waktu_pulang');
            $table->date('tanggal');
            $table->integer('cabang');
            $table->integer('user');
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
        Schema::dropIfExists('pickupbarang');
    }
}
