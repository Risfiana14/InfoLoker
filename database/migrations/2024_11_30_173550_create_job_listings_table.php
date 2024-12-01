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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies'); // Relasi ke perusahaan
            $table->string('title'); // Judul pekerjaan
            $table->text('description'); // Deskripsi pekerjaan
            $table->json('skills_required')->nullable(); // Keterampilan yang dibutuhkan (dalam format JSON)
            $table->enum('experience_level', ['entry', 'mid', 'senior']); // Level pengalaman
            $table->string('location'); // Lokasi pekerjaan
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
