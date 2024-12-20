<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
   // Method to list all cards
public function index()
{
    $cards = loker::all();
    return view('lamaran.index', compact('cards'));
}

// Method to show the form to create a new card
public function create()
{
    return view('lamaran.create');
}

// Method to store the new card
public function store(Request $request)
{
    // Validate the data
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'tgl_lamaran' => 'required|date',
        'bidang' => 'required|string|max:255',
        'kategori1' => 'required|string|max:255',
        'kategori2' => 'required|string|max:255',
        'kategori3' => 'nullable|string|max:255',
        'kategori4' => 'nullable|string|max:255',
        'kategori5' => 'nullable|string|max:255',
        'gaji' => 'required|numeric',
        'lokasi' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'kualifikasi' => 'required|string',
        'tanggung_jawab' => 'required|string',
    ]);

    // Store the data in the database
    loker::create($validated);

    // Redirect to the index page with a success message
    return redirect()->back()->with('success', 'Lowongan berhasil ditambahkan');
}

// Method to show the edit form for an existing card
public function edit(loker $loker)
{
    return view('lamaran.edit', compact('loker'));
}



// public function update(Request $request, Card $card)
// {

//     // Validasi input tanpa kolom image1 dan image2
//     $validated = $request->validate([
//         'nama' => 'required|string|max:255',
//         'tgl_lamaran' => 'required|date',
//         'bidang' => 'required|string|max:255',
//         'kategori1' => 'required|string|max:255',
//         'kategori2' => 'required|string|max:255',
//         'kategori3' => 'nullable|string|max:255',
//         'kategori4' => 'nullable|string|max:255',
//         'kategori5' => 'nullable|string|max:255',
//         'gaji' => 'required|numeric',
//         'lokasi' => 'required|string|max:255',
//         'deskripsi' => 'required|string',
//         'kualifikasi' => 'required|string',
//         'tanggung_jawab' => 'required|string',
//     ]);

//     // Proses update data tanpa kolom image1 dan image2
//     $updated = $card->update($validated);

//     if ($updated) {
//         return redirect()->route('cards.index')->with('success', 'Lowongan berhasil diperbarui');
//     } else {
//         return redirect()->route('cards.index')->with('error', 'Terjadi kesalahan saat memperbarui data');
//     }
// }

public function update(Request $request, loker $loker)
{
    // Validasi input tanpa kolom image1 dan image2
    // $validated = $request->validate([
    //     'nama' => 'required|string|max:255',
    //     'tgl_lamaran' => 'required|date',
    //     'bidang' => 'required|string|max:255',
    //     'kategori1' => 'required|string|max:255',
    //     'kategori2' => 'required|string|max:255',
    //     'kategori3' => 'nullable|string|max:255',
    //     'kategori4' => 'nullable|string|max:255',
    //     'kategori5' => 'nullable|string|max:255',
    //     'gaji' => 'required|numeric',
    //     'lokasi' => 'required|string|max:255',
    //     'deskripsi' => 'required|string',
    //     'kualifikasi' => 'required|string',
    //     'tanggung_jawab' => 'required|string',
    // ]);

    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'tgl_lamaran' => 'required|date',
        'bidang' => 'required|string|max:255',
        'gaji' => 'required|numeric',
        'lokasi' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'kualifikasi' => 'required|string',
        'tanggung_jawab' => 'required|string',
    ]);


    // Raw SQL Query untuk update
    $updated = DB::update('
        UPDATE loker
        SET
            nama = ?,
            tgl_lamaran = ?,
            bidang = ?,
            gaji = ?,
            lokasi = ?,
            deskripsi = ?,
            kualifikasi = ?,
            tanggung_jawab = ?
        WHERE id = ?', [
            $validated['nama'],
            $validated['tgl_lamaran'],
            $validated['bidang'],
            $validated['gaji'],
            $validated['lokasi'],
            $validated['deskripsi'],
            $validated['kualifikasi'],
            $validated['tanggung_jawab'],
            $loker->id // Menggunakan ID card yang diupdate
    ]);

    if ($updated) {
        return redirect()->route('loker.index')->with('success', 'Lowongan berhasil diperbarui');
    } else {
        return redirect()->route('loker.index')->with('error', 'Terjadi kesalahan saat memperbarui data');
    }
}


// public function update(Request $request, Card $card)
// {
//     // Validasi input tanpa kolom image1 dan image2
//     $validated = $request->validate([
//         'nama' => 'required|string|max:255',
//         'tgl_lamaran' => 'required|date',
//         'bidang' => 'required|string|max:255',
//         'kategori1' => 'required|string|max:255',
//         'kategori2' => 'required|string|max:255',
//         'kategori3' => 'nullable|string|max:255',
//         'kategori4' => 'nullable|string|max:255',
//         'kategori5' => 'nullable|string|max:255',
//         'gaji' => 'required|numeric',
//         'lokasi' => 'required|string|max:255',
//         'deskripsi' => 'required|string',
//         'kualifikasi' => 'required|string',
//         'tanggung_jawab' => 'required|string',
//     ]);

//     // Raw SQL Query untuk INSERT INTO tabel cards
//     $inserted = DB::insert('
//         INSERT INTO cards (
//             nama,
//             tgl_lamaran,
//             bidang,
//             kategori1,
//             kategori2,
//             kategori3,
//             kategori4,
//             kategori5,
//             gaji,
//             lokasi,
//             deskripsi,
//             kualifikasi,
//             tanggung_jawab
//         ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
//             $validated['nama'],
//             $validated['tgl_lamaran'],
//             $validated['bidang'],
//             $validated['kategori1'],
//             $validated['kategori2'],
//             $validated['kategori3'],
//             $validated['kategori4'],
//             $validated['kategori5'],
//             $validated['gaji'],
//             $validated['lokasi'],
//             $validated['deskripsi'],
//             $validated['kualifikasi'],
//             $validated['tanggung_jawab']
//     ]);

//     if ($inserted) {
//         return redirect()->route('cards.index')->with('success', 'Lowongan berhasil ditambahkan');
//     } else {
//         return redirect()->route('cards.index')->with('error', 'Terjadi kesalahan saat menambahkan data');
//     }
// }


// Method to delete a card
public function destroy(loker $loker)
{
    $loker->delete();

    return redirect()->route('loker.index')->with('success', 'Lowongan berhasil dihapus');
}

}
