<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example video names, YouTube links, and local paths
        $titles = [
            'Belajar Cisco CCNA Dasar',
            'Panduan Lengkap Laravel',
            'Networking Fundamentals',
            'Pemrograman Python untuk Pemula',
            'Tutorial Javascript Modern',
            'Konsep Dasar Jaringan Komputer',
            'Docker untuk Developer',
            'Pengenalan DevOps dan CI/CD',
            'Mikrotik RouterOS Configuration',
            'Linux Server Administration'
        ];

        $links = [
            'https://www.youtube.com/embed/xCnR2E4FhLo',
            'https://www.youtube.com/embed/Z9dvM7qgN9s',
            'https://www.youtube.com/embed/3l13qBk1EYw',
            'https://www.youtube.com/embed/rfscVS0vtbw',
            'https://www.youtube.com/embed/PkZNo7MFNFg',
            'https://www.youtube.com/embed/WxGBoY5iNXY',
            'https://www.youtube.com/embed/fqMOX6JJhGo',
            'https://www.youtube.com/embed/1xo-0gCVhTU',
            'https://www.youtube.com/embed/j7fNBfDf-zw',
            'https://www.youtube.com/embed/l9AzO1FMgM8'
        ];

        $paths = [
            'videos/cisco_tutorial.mp4',
            'videos/laravel_tutorial.mp4',
            'videos/networking_fundamentals.mp4',
            'videos/python_for_beginners.mp4',
            'videos/javascript_guide.mp4',
            'videos/computer_network_basics.mp4',
            'videos/docker_basics.mp4',
            'videos/devops_ci_cd.mp4',
            'videos/mikrotik_configuration.mp4',
            'videos/linux_admin.mp4'
        ];

        // Insert 10 randomized records
        for ($i = 0; $i < 10; $i++) {
            DB::table('pelatihan')->insert([
                'nama_pelatihan' => $titles[array_rand($titles)],
                'link_pelatihan' => $links[array_rand($links)],
                'video_path' => $paths[array_rand($paths)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
