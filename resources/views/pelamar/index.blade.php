@extends('layout.main')
@section('content')
    <h1 class="text-center mb-4">Daftar Pelamar</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>CV</th>
                    <th>Perusahaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobApplicants as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            <a href="{{ asset('uploads/cv/' . $item->cv) }}" class="btn btn-sm btn-primary"
                                target="_blank">Lihat CV</a>
                        </td>
                        <td>{{ $item->company->name }}</td>
                        <td>
                            <a href="{{ route('pelamar.show', $item->id) }}" class="btn btn-sm btn-info">Lihat</a>
                            <form action="{{ route('pelamar.destroy', $item->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
