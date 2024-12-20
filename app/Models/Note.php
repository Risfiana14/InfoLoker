<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'note';

    // Primary key
    protected $primaryKey = 'idnote';

    // Kolom yang dapat diisi
    protected $fillable = [
        'created_at',
        'updated_at',
    ];

    // Timestamps otomatis
    public $timestamps = true;
}

