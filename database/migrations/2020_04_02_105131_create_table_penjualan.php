<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stt');
            $table->integer('kantor_asal')->nullable();
            $table->integer('kantor_tujuan')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('penerima')->nullable();
            $table->text('alamat_pengirim')->nullable();
            $table->text('alamat_penerima')->nullable();
            $table->string('nama_penerus')->nullable();
            $table->string('kode_penerus')->nullable();
            $table->string('nama_barang')->nullable();
            $table->string('payment')->nullable();
            $table->string('jumlah_colly')->nullable();
            $table->string('packing')->nullable();
            $table->string('jenis_harga')->nullable();
            $table->string('vmet')->nullable();
            $table->string('berat')->nullable();
            $table->integer('harga_per_kilo')->nullable();
            $table->integer('harga_total')->nullable();
            $table->text('keterangan_tambahan')->nullable();
            $table->string('kontak_pengirim')->nullable();
            $table->string('kontak_penerima')->nullable();
            $table->integer('user')->nullable();
            $table->integer('cabang');
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
        Schema::dropIfExists('penjualan');
    }
}
