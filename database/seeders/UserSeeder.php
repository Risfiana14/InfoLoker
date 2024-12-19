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
            'role' => '2',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // Password hash
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
