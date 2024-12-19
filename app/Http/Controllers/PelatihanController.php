<?php

namespace App\Http\Controllers;

use App\Models\PelatihanModel;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $data = PelatihanModel::all();
        return view('pelatihan.index', compact('data'));
    }

    public function show($id) {

        $data = PelatihanModel::find($id);
        return view('pelatihan.show', compact('data'));
    }

}
