<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
     // Metode untuk menampilkan form edit pekerjaan
     public function edit($id)
     {
         $job = Job::findOrFail($id);  // Temukan pekerjaan berdasarkan ID
         return view('job.edit', compact('job'));  // Kembalikan ke view edit dengan data pekerjaan
     }
 
     // Metode untuk menghapus pekerjaan
     public function destroy($id)
     {
         $job = Job::findOrFail($id);  // Temukan pekerjaan berdasarkan ID
         $job->delete();  // Hapus pekerjaan
 
         return redirect()->route('job.index')->with('success', 'Job deleted successfully');
     }

     // Metode untuk memperbarui pekerjaan
public function update(Request $request, $id)
{
    $job = Job::findOrFail($id);
    $job->update([
        'title' => $request->title,
        'location' => $request->location,
        'category' => $request->category,
        'salary' => $request->salary,
    ]);

    return redirect()->route('job.index')->with('success', 'Job updated successfully');
}

    public function index(Request $request)
    {
        $query = Job::query();

        // Filter berdasarkan judul
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        // Filter berdasarkan lokasi
        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter berdasarkan gaji (range)
        if ($request->filled('min_salary') && $request->filled('max_salary')) {
            $query->whereBetween('salary', [$request->min_salary, $request->max_salary]);
        }

        $jobs = $query->paginate(10);

        return view('job.index', compact('jobs'));
    }

   
    public function create()
    {
        return view('job.create'); 
    }

    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
        ]);

        Job::create($validated);

        return redirect()->route('job.index')->with('success', 'Job successfully created!');
    }
}

    
