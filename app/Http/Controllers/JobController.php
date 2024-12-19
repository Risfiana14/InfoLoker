<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Menampilkan semua data
        return view('job.index', compact('jobs'));
    }

    public function create()
    {
        return view('job.create'); // Form untuk membuat data baru
    }

    public function store(Request $request)
    {
        // Validasi data
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'location' => 'required|string|max:255',
        //     'category' => 'required|string|max:255',
        //     'salary' => 'required|numeric',
        // ]);

        // Simpan ke database
        Job::create($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }
}
