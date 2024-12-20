<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    use HasFactory;

    protected $table = 'loker';

    // Tambahkan kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'tgl_lamaran',
        'bidang',
        'kategori1',
        'kategori2',
        'kategori3',
        'kategori4',
        'kategori5',
        'gaji',
        'lokasi',
        'deskripsi',
        'kualifikasi',
        'tanggung_jawab',
    ];
}
