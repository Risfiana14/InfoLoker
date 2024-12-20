@extends('layout.main')
@section('content')
    <div class="container">

        <a href="/loker" class="btn btn-primary ">Back</a>

        <div class="header">
            <h1>{{ $loker->nama }}</h1>
            <h3>Kualifikasi</h3>
            <p>{{ $loker->kualifikasi }}</p>
            <h3>Deskripsi</h3>
            <p>{{ $loker->deskripsi }}</p>
        </div>

        <h2>Daftar Pelamar</h2>
        @if ($users->isEmpty())
            <p>No applicants for this job yet.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Detail Lamaran</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->isi_lamaran }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                @if ($user->status == 'pending')
                                    <p class="text-uppercase fw-bold m-0 p-0">{{ $user->status }}</p>
                                @elseif($user->status == 'accepted')
                                    <p class="text-uppercase text-success fw-bold m-0 p-0">{{ $user->status }}</p>
                                @else
                                    <p class="text-uppercase text-danger fw-bold m-0 p-0">{{ $user->status }}</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ asset('storage/' . $user->dokumen) }}" class="btn btn-sm btn-primary"
                                    target="_blank">View Document</a>
                                <a href="{{ route('lamaran.accept', $user->lamaran_id) }}"
                                    class="btn btn-sm btn-success">Accept</a>
                                <a href="{{ route('lamaran.decline', $user->lamaran_id) }}"
                                    class="btn btn-sm btn-danger">Decline</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
