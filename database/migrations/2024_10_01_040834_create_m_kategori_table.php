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
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id('kategori_id');
            // $table->unsignedBigInteger('level_id')->index();
            $table->string('kategori_kode', 10);
            $table->string('kategori_nama', 100);
            $table->timestamps();

            //mendefinisikan Foreign key pada kolom level_id mengacu pada kolom level_id pada tabel m_level
            // $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_kategori', function (Blueprint $table) {
            //
        });
    }
};
