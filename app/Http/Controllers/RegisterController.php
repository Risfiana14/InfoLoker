<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function indexregister(){
        // $role = DB::table('JENIS_USER')->get();
        $role = DB::SELECT("SELECT * FROM roles");
       
        return view('register', compact('role'));
    }

    public function register(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        // Membuat pengguna baru
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirect ke halaman login atau dashboard
       
        return redirect()->route('login')->with('success', 'Pengguna berhasil dibuat');
    }
}
