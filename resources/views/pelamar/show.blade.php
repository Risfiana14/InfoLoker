@extends('layout.main')

@section('content')

    <h1>Detail Pelamar</h1>
    <p>Nama: {{ $jobApplicant->name }}</p>
    <p>Email: {{ $jobApplicant->email }}</p>
    <p>Alamat: {{ $jobApplicant->address }}</p>
    <p>No. HP: {{ $jobApplicant->phone_number }}</p>
    <p>CV: {{ $jobApplicant->cv }}</p>
    <p>Perusahaan: {{ $jobApplicant->company->name }}</p>
    <a href="{{ route('pelamar.index') }}" class="btn btn-primary">Kembali</a>
@endsection
