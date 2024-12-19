<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::join('roles', 'users.idrole', '=', 'roles.idrole')
            ->select('users.*', 'roles.nama_role')
            ->get();

        $roles = Role::all(); // Fetch all roles

        return view('profile.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $roles = Role::all(); // Fetch all roles
        return view('profile.index', compact('roles'));
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username|max:255',
            'password' => 'required|min:6',
            'idrole' => 'required|exists:roles,idrole',
            'no_hp' => 'nullable|max:20',
            'alamat' => 'nullable|string',
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password), // Hash password
            'idrole' => $request->idrole,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('profile.index', compact('user', 'roles'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'username' => 'required|max:255|unique:users,username,' . $user->iduser . ',iduser',
            'idrole' => 'required|exists:roles,idrole',
            'no_hp' => 'nullable|max:20',
            'alamat' => 'nullable|string',
        ]);

        $user->update([
            'username' => $request->username,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'idrole' => $request->idrole,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class ProfileController extends Controller
// {
//     public function index()
//     {
//         $user = Auth::user();

//         if (
//             !$user->no_ktp || !$user->no_kk || !$user->nama_lengkap || !$user->tanggal_lahir ||
//             !$user->tempat_lahir || !$user->provinsi || !$user->pendidikan || !$user->nama_sekolah ||
//             !$user->tahun_lulus || !$user->no_ijazah || !$user->tanggal_ijazah || !$user->nilai_rata_rata ||
//             !$user->jenis_kelamin || !$user->agama || !$user->status_perkawinan || !$user->tinggi_badan ||
//             !$user->Alamat || !$user->no_hp || !$user->image
//         ) {
//             return redirect()->route('isiformulir')->with('error', 'Lengkapi data Anda terlebih dahulu.');
//         }

//         return view('profile.myprofile', compact('user'));
//     }

//     public function create()
//     {
//         return view('profile.isiformulir');
//     }

//     public function store(Request $request)
// {
//     $request->validate([
//         'no_ktp' => 'required|string',
//         'no_kk' => 'required|string',
//         'nama_lengkap' => 'required|string',
//         'tanggal_lahir' => 'required|date',
//         'tempat_lahir' => 'required|string',
//         'provinsi' => 'required|string',
//         'pendidikan' => 'required|string',
//         'nama_sekolah' => 'required|string',
//         'tahun_lulus' => 'required|digits:4',
//         'no_ijazah' => 'required|string',
//         'tanggal_ijazah' => 'required|date',
//         'nilai_rata_rata' => 'required|numeric',
//         'jenis_kelamin' => 'required|string',
//         'agama' => 'required|string',
//         'status_perkawinan' => 'required|string',
//         'tinggi_badan' => 'required|integer',
//         'Alamat' => 'required|string',
//         'no_hp' => 'required|string',
//         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $user = Auth::user();

//     $data = $request->except('image');

//     // Simpan gambar jika ada
//     if ($request->hasFile('image')) {
//         $path = $request->file('image')->store('profile_images', 'public');
//         $data['image'] = $path;
//     }

//     $user->update($data);

//     return redirect()->route('myprofile')->with('success', 'Data berhasil disimpan.');
// }


//     public function edit()
//     {
//         $user = Auth::user();
//         return view('profile.editformulir', compact('user'));
//     }

//     public function update(Request $request)
// {
//     $request->validate([
//         'no_ktp' => 'required|string',
//         'no_kk' => 'required|string',
//         'nama_lengkap' => 'required|string',
//         'tanggal_lahir' => 'required|date',
//         'tempat_lahir' => 'required|string',
//         'provinsi' => 'required|string',
//         'pendidikan' => 'required|string',
//         'nama_sekolah' => 'required|string',
//         'tahun_lulus' => 'required|digits:4',
//         'no_ijazah' => 'required|string',
//         'tanggal_ijazah' => 'required|date',
//         'nilai_rata_rata' => 'required|numeric',
//         'jenis_kelamin' => 'required|string',
//         'agama' => 'required|string',
//         'status_perkawinan' => 'required|string',
//         'tinggi_badan' => 'required|integer',
//         'Alamat' => 'required|string',
//         'no_hp' => 'required|string',
//         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $user = Auth::user();

//     $data = $request->except('image');

//     // Simpan gambar jika ada
//     if ($request->hasFile('image')) {
//         $path = $request->file('image')->store('profile_images', 'public');
//         $data['image'] = $path;
//     }

//     $user->update($data);

//     return redirect()->route('myprofile')->with('success', 'Data berhasil diperbarui.');
// }

// }
