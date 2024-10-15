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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('pembeli', 50)->unique();
            $table->string('penjualan_kode', 100);
            $table->dateTime('penjualan_tanggal');
            // $table->unsignedInteger('harga_jual');
            $table->timestamps();

            //mendefinisikan Foreign key pada kolom level_id mengacu pada kolom level_id pada tabel m_level
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};