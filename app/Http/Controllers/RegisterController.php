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
        return view('register.register', compact('role'));
    }

    public function register(Request $request)
    {
        
        // Membuat pengguna baru
        $user = User::create([
            'id_user' => Str::uuid()->toString(),
            'username' => $request->username,
            // 'nama_user' => $request->nama_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'no_hp' => $request->no_hp,
            // 'wa' => $request->wa,
            // 'pin' => $request->pin,
            'id_jenis_user' => 1,
            'status_user' => 'Active'
        ]);
    
        Auth::login($user);
    

        // Redirect ke halaman login atau dashboard
        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }
}
