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
            'name' => 'Admin User',
            'username' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Password hash
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
