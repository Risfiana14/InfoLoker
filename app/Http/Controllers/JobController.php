<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
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

        return view('jobs.index', compact('jobs'));
    }
}
