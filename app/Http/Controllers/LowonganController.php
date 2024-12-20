<?php

namespace App\Http\Controllers;

use App\Models\lamaran;
use Illuminate\Http\Request;
use App\Models\loker;
use Illuminate\Support\Facades\Auth;

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
        // Fetch the loker details
        $card = Loker::find($id);

        // Redirect if the loker does not exist
        if (!$card) {
            return redirect()->route('lowongan.index')->with('error', 'Pekerjaan tidak ditemukan');
        }

        // Check if the user has already applied for this loker and fetch the application details
        $application = Lamaran::where('user_id', Auth::id())
            ->where('loker_id', $id)
            ->first();

        // Pass the data and application status to the view
        return view('lowongan.lamar', compact('card', 'application'));
    }
}
