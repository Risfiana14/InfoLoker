<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loker;

class LowonganController extends Controller
{
    // public function index()
    // {
    //     // Anda dapat menambahkan data yang ingin dikirim ke view di sini
    //     $data = [
    //         'title' => 'Daftar Lowongan',
    //         'lowonganList' => [
    //             ['id' => 1, 'title' => 'Lowongan Developer', 'company' => 'PT Teknologi Maju', 'location' => 'Jakarta'],
    //             ['id' => 2, 'title' => 'Lowongan Designer', 'company' => 'PT Kreatif', 'location' => 'Bandung'],
    //         ],
    //     ];

    //     // Mengembalikan tampilan halaman lowongan.index dengan data
    //     return view('lowongan.index', $data);
    // }

    public function index()
    {
        // Ambil semua data dari tabel cards
        $cards = loker::all();

        // Kirim data cards ke view
        return view('lowongan.index', compact('cards'));
    }

    // public function lamar() {
    //     return view('lowongan.lamar');
    // }

    public function lamar($id)
    {
        // Ambil data berdasarkan ID
        $card = loker::find($id);

        // Jika data tidak ditemukan, redirect ke halaman lain (misalnya halaman lowongan)
        if (!$card) {
            return redirect()->route('lowongan.index')->with('error', 'Pekerjaan tidak ditemukan');
        }

        // Kirimkan data ke view
        return view('lowongan.lamar', compact('card'));
    }


}
