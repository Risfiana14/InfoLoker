<?php

namespace App\Http\Controllers;

use App\Models\JobApplicant;
use Illuminate\Http\Request;

class job_applicantsController extends Controller
{
    /**
     * Menampilkan daftar job applicant
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobApplicants = JobApplicant::with('company')->get();
        return view('pelamar.index', compact('jobApplicants'));
    }

    public function store(Request $request)
    {
        $jobApplicant = new JobApplicant();
        $jobApplicant->name = $request->name;
        $jobApplicant->email = $request->email;
        $jobApplicant->address = $request->address;
        $jobApplicant->phone_number = $request->phone_number;
        $jobApplicant->cv = $request->cv;
        $jobApplicant->company_id = $request->company_id;
        $jobApplicant->save();
        return redirect()->route('pelamar.index');
    }

    /**
     * Menampilkan detail job applicant
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobApplicant = JobApplicant::with('company')->find($id);
        return view('pelamar.show', compact('pelamar.show'));
    }

    /**
     * Mengupdate data job applicant
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jobApplicant = JobApplicant::find($id);
        $jobApplicant->name = $request->name;
        $jobApplicant->email = $request->email;
        $jobApplicant->address = $request->address;
        $jobApplicant->phone_number = $request->phone_number;
        $jobApplicant->cv = $request->cv;
        $jobApplicant->company_id = $request->company_id;
        $jobApplicant->save();
        return redirect()->route('pelamar.index');
    }

    /**
     * Menghapus data job applicant
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobApplicant::destroy($id);
        return redirect()->route('pelamar.index');
    }
}

