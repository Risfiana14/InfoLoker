<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil pengguna yang sedang login
        return view('layout.main', compact('user')); // Kirimkan data pengguna ke view
    }


}
