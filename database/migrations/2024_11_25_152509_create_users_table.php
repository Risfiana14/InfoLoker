<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_users_table.php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->string('id_user', 36)->primary()->autoIncrement(); // Ubah panjang menjadi 36
        $table->string('nama_user', 60);
        $table->string('username', 60);
        $table->string('password', 200);
        $table->string('email', 200)->unique();
        $table->string('no_hp', 20);
        $table->string('wa', 20);
        $table->string('pin', 30);
        $table->string('id_jenis_user', 30);
        $table->string('status_user', 30);
        $table->boolean('delete_mark')->default(false);
        $table->timestamps();

        $table->foreign('id_jenis_user')->references('id_jenis_user')->on('jenis_user');
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
