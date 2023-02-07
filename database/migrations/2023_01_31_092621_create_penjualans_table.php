<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_penjualan');
            $table->integer('nomer_penjualan');
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->unsignedBigInteger('id_kasir');
            $table->foreign('id_kasir')->references('id')->on('kasirs');
            $table->integer('subtotal')->nullable();
            $table->float('diskon')->nullable();
            $table->integer('total');
            $table->integer('bayar');
            $table->enum('model_pembayaran',['cash','gopay','qris','polijepay','transfer bank']);
            $table->integer('kembalian');
            $table->integer('no_meja');
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
        Schema::dropIfExists('penjualans');
    }
};
