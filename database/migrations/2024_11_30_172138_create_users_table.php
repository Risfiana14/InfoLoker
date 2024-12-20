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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Renamed from 'name'
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_ktp', 50)->nullable();
            $table->string('no_kk', 50)->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('pendidikan', 100)->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->year('tahun_lulus')->nullable();
            $table->string('no_ijazah', 100)->nullable();
            $table->date('tanggal_ijazah')->nullable();
            $table->decimal('nilai_rata_rata', 5, 2)->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('agama', 50)->nullable();
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'])->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->char('role', 1)->default('1'); // Role defaults to '1'
            $table->timestamps(); // Includes created_at and updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
