<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Admin User
        DB::table('users')->insert([
            'id_user' => Str::uuid(),
            'nama_user' => 'Admin User',
            'username' => 'admin',
            'password' => Hash::make('password123'), // Password hash
            'email' => 'admin@example.com',
            'no_hp' => '081234567890',
            'wa' => '081234567890',
            'pin' => '1234',
            'id_jenis_user' => '1', // ID jenis user admin
            'status_user' => 'active',
            'delete_mark' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
