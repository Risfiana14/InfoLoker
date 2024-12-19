<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jobs'; // Nama tabel sesuai file SQL
    protected $fillable = ['title', 'location', 'category', 'salary']; // Sesuaikan dengan kolom tabel
}


