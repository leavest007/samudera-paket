<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKasKecil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaskecil', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tanggal')->nullable();
            $table->string('kode_account')->nullable();
            $table->string('nama_account')->nullable();
            $table->integer('kantor')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('keterangan_tambahan')->nullable();
            $table->string('debet')->nullable();
            $table->string('kredit')->nullable();
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
        Schema::dropIfExists('kaskecil');
    }
}
