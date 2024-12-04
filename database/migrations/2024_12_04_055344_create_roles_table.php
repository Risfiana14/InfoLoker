<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap role
            $table->string('name')->unique(); // Nama role (harus unik)
            $table->string('description')->nullable(); // Deskripsi role
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });

        // Menambahkan data default
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Administrator with full access'],
            ['name' => 'employer', 'description' => 'Employer who can post job listings'],
            ['name' => 'job_seeker', 'description' => 'Job seeker who can apply to jobs']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
