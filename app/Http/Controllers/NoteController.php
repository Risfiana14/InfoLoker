<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = note::all(); // Perbaikan casing
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        note::create($request->all()); // Perbaikan casing
        return redirect()->route('notes.index')->with('success', 'Catatan berhasil dibuat.');
    }

    public function show($idnote)
    {
        $note = note::findOrFail($idnote); // Perbaikan casing
        return view('notes.show', compact('note'));
    }

    public function edit($idnote)
    {
        $note = note::findOrFail($idnote); // Perbaikan casing
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $idnote)
    {
        $request->validate([
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $note = note::findOrFail($idnote); // Perbaikan casing
        $note->update($request->all());
        return redirect()->route('notes.index')->with('success', 'Catatan berhasil diperbarui.');
    }

    public function destroy($idnote)
    {
        $note = note::findOrFail($idnote); // Perbaikan casing
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Catatan berhasil dihapus.');
    }
}
