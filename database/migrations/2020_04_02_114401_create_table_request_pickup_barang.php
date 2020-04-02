<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRequestPickupBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestpickupbarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pengirim');
            $table->string('penerima');
            $table->text('alamat_pengambilan');
            $table->text('tujuan');
            $table->integer('jumlah_colly');
            $table->integer('cabang');
            $table->string('status');
            $table->date('tanggal');
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
        Schema::dropIfExists('requestpickupbarang');
    }
}
