<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id')->index();
            $table->unsignedBigInteger('barang_id')->index();
            // $table->dateTime('stok_tanggal')->unique();
            // $table->string('stok_jumlah');
            // $table->dateTime('penjualan_tanggal');
            $table->unsignedInteger('harga');
            $table->unsignedInteger('jumlah');
            $table->timestamps();

            //mendefinisikan Foreign key pada kolom level_id mengacu pada kolom level_id pada tabel m_level
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
