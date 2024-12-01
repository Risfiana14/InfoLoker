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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Relasi ke pengguna
            $table->string('type'); // Jenis notifikasi (misalnya: lamaran diterima, pekerjaan baru)
            $table->text('message'); // Isi pesan notifikasi
            $table->boolean('is_read')->default(false); // Status notifikasi dibaca atau belum
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
