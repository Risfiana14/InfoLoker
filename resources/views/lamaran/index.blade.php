{{-- @extends('layout.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Daftar Cards</h4>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <h5 class="card-header">Daftar Cards</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lamaran</th>
                                    <th>Bidang</th>
                                    <th>Kategori 1</th>
                                    <th>Gaji</th>
                                    <th>Lokasi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cards as $card)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $card->nama }}</td>
                                        <td>{{ $card->tgl_lamaran }}</td>
                                        <td>{{ $card->bidang }}</td>
                                        <td>{{ $card->kategori1 }}</td>
                                        <td>{{ number_format($card->gaji, 0, ',', '.') }}</td>
                                        <td>{{ $card->lokasi }}</td>
                                        <td>
                                            <a href="{{ route('cards.edit', $card->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('cards.destroy', $card->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus card ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

<!-- resources/views/cards/index.blade.php -->

@extends('layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Daftar Lowongan</h4>

    <!-- Menampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Create Button -->
    <div class="mb-3">
        <a href="{{ route('loker.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Tambah Lowongan
        </a>
    </div>

    <!-- Daftar Lowongan -->
    <div class="row mt-4">
        <div class="col-xl">
            <div class="card">
                <h5 class="card-header">Daftar Lowongan</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lowongan</th>
                                <th>Bidang</th>
                                <th>Gaji</th>
                                <th>Lokasi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cards as $card)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $card->nama }}</td>
                                    <td>{{ $card->bidang }}</td>
                                    <td>{{ number_format($card->gaji, 0, ',', '.') }}</td>
                                    <td>{{ $card->lokasi }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('loker.edit', $card->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('loker.destroy', $card->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus lowongan ini?')">Hapus</button>
                                        </form>

                                        <a href="{{ route('lamaran.show', $card->id) }}" class="btn btn-sm btn-primary">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
