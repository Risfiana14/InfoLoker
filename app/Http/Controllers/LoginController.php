<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function indexlogin()
    {
        return view('login');
    }

    public function indexregister()
    {
        return view('register.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string'],
        ]);  
        Log::info('Mencoba login dengan email: '.$request->email);

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard')); 
        }
        Log::warning('Login gagal untuk email: '.$request->email);  // Log saat login gagal
        return back()->withErrors([
            'email' => 'Kombinasi email dan password tidak cocok.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'no_hp' => 'required',
            'wa' => 'required',
            'pin' => 'required',
            'ID_JENIS_USER' => 'required|exists:JENIS_USER,ID_JENIS_USER'
        ]);
        
        // Membuat pengguna baru
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'wa' => $request->wa,
            'pin' => $request->pin,
            'ID_JENIS_USER' => $request->ID_JENIS_USER
        ]);
    
        Auth::login($user);
    
        if ($user->save()) {
            // Mengambil nama JENIS_USER berdasarkan ID_JENIS_USER
            $jenisUser = DB::table('JENIS_USER')->where('ID_JENIS_USER', $user->ID_JENIS_USER)->value('jenis_user');
            
            // Menyimpan nama JENIS_USER ke dalam session
            session(['JENIS_USER' => $jenisUser]);

            return redirect()->route('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('userpage');
    }
}
