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
        Schema::create('loker', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama'); // Nama card
            $table->date('tgl_lamaran'); // Tanggal lamaran
            $table->string('bidang'); // Bidang pekerjaan
            $table->string('kategori1'); // Kategori 1
            $table->string('kategori2'); // Kategori 2
            $table->string('kategori3')->nullable(); // Kategori 3 bisa null
            $table->string('kategori4')->nullable(); // Kategori 4 bisa null
            $table->string('kategori5')->nullable(); // Kategori 5 bisa null
            $table->decimal('gaji', 15, 2); // Gaji
            $table->string('lokasi'); // Lokasi pekerjaan
            $table->text('deskripsi'); // Deskripsi pekerjaan
            $table->text('kualifikasi'); // Kualifikasi
            $table->text('tanggung_jawab'); // Tanggung jawab
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
