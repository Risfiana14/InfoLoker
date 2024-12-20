<?php

namespace App\Http\Controllers;

use App\Models\lamaran;
use App\Models\loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // Validate input
        $validatedData = $request->validate([
            'dokumen_lamaran' => 'required|file|max:2048',
            'isi_lamaran' => 'required|string|max:1000',
        ]);

        // Handle file upload and preserve the original filename
        $path = null;
        if ($request->hasFile('dokumen_lamaran')) {
            $file = $request->file('dokumen_lamaran');
            $originalFilename = $file->getClientOriginalName(); // Get the original filename
            $path = $file->storeAs('uploads', $originalFilename, 'public'); // Save with the original filename
        }

        // Save data to the database
        lamaran::create([
            'dokumen' => $path,
            'isi_lamaran' => $validatedData['isi_lamaran'],
            'user_id' => Auth::id(),
            'loker_id' => $id,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Get the loker
        $loker = Loker::findOrFail($id);

        // Get all users who applied for this loker
        $users = DB::table('lamarans')
            ->join('users', 'lamarans.user_id', '=', 'users.id')
            ->where('lamarans.loker_id', $id)
            ->select('users.*', 'lamarans.id as lamaran_id', 'lamarans.isi_lamaran', 'lamarans.dokumen', 'lamarans.status')
            ->get();

        return view('lamaran.show', compact('loker', 'users'));
    }


    public function accept($id)
    {
        $lamaran = lamaran::find($id);

        $lamaran->status = 'accepted';
        $lamaran->save();

        return redirect()->back()->with('success', 'Lamaran Diterima');
    }
    public function decline($id)
    {
        $lamaran = lamaran::find($id);

        $lamaran->status = 'declined';
        $lamaran->save();

        return redirect()->back()->with('success', 'Lamaran Ditolak');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lamaran $lamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lamaran $lamaran)
    {
        //
    }
}
