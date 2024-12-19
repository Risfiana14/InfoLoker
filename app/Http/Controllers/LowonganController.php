<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        // Anda dapat menambahkan data yang ingin dikirim ke view di sini
        $data = [
            'title' => 'Daftar Lowongan',
            'lowonganList' => [
                ['id' => 1, 'title' => 'Lowongan Developer', 'company' => 'PT Teknologi Maju', 'location' => 'Jakarta'],
                ['id' => 2, 'title' => 'Lowongan Designer', 'company' => 'PT Kreatif', 'location' => 'Bandung'],
            ],
        ];

        // Mengembalikan tampilan halaman lowongan.index dengan data
        return view('lowongan.index', $data);
    }

    public function lamar() {
        return view('lowongan.lamar');
    }
}
