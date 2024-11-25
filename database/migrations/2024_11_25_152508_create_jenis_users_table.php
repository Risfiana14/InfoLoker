<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
// database/migrations/xxxx_xx_xx_create_jenis_user_table.php
public function up()
{
    Schema::create('jenis_user', function (Blueprint $table) {
        $table->string('id_jenis_user', 36)->primary(); // Ubah panjang menjadi 36
        $table->string('jenis_user', 60);
        $table->string('create_by', 30);
        $table->boolean('delete_mark')->default(0);
        $table->string('update_by', 30);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('jenis_user');
    }

};