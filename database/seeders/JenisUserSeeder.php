<?php

// database/seeders/JenisUserSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JenisUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jenis_user')->insert([
            [
                'id_jenis_user' => '1',
                'jenis_user' => 'admin',
                'create_by' => 'system',
                'delete_mark' => false,
                'update_by' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jenis_user' => '2',
                'jenis_user' => 'user',
                'create_by' => 'system',
                'delete_mark' => false,
                'update_by' => 'system',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
