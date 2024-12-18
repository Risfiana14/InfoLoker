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
