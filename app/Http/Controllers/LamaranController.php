<?php

namespace App\Http\Controllers;

use App\Models\lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'dokumen_lamaran' => 'required|file|max:2048',
            'isi_lamaran' => 'required|string|max:1000',
        ]);

        // Handle file upload
        $path = null;
        if ($request->hasFile('dokumen_lamaran')) {
            $file = $request->file('dokumen_lamaran');
            $path = $file->store('uploads', 'public'); // Save to 'storage/app/public/uploads'
        }

        // Save data to the database
        lamaran::create([
            'dokumen' => $path,
            'isi_lamaran' => $validatedData['isi_lamaran'],
            'user_id' => Auth::id()
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $lamaran = lamaran::find($id);
        return view('lamaran.show', compact('lamaran'));
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
