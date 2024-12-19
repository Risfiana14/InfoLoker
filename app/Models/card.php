<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

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
        'image1',
        'image2',
    ];
}
