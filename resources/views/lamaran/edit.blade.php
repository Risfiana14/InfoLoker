<!-- resources/views/cards/edit.blade.php -->

@extends('layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Lowongan</h4>

    <!-- Menampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xl">
            <div class="card">
                <h5 class="card-header">Form Edit Lowongan</h5>
                <div class="card-body">
                    <!-- Form untuk edit lowongan -->
                    <form action="{{ route('cards.update', $card->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lowongan</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $card->nama) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lamaran" class="form-label">Tanggal Lamaran</label>
                            <input type="date" id="tgl_lamaran" name="tgl_lamaran" class="form-control" value="{{ old('tgl_lamaran', $card->tgl_lamaran) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="bidang" class="form-label">Bidang</label>
                            <input type="text" id="bidang" name="bidang" class="form-control" value="{{ old('bidang', $card->bidang) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="number" id="gaji" name="gaji" class="form-control" value="{{ old('gaji', $card->gaji) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ old('lokasi', $card->lokasi) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ old('deskripsi', $card->deskripsi) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="kualifikasi" class="form-label">Kualifikasi</label>
                            <textarea id="kualifikasi" name="kualifikasi" class="form-control" required>{{ old('kualifikasi', $card->kualifikasi) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggung_jawab" class="form-label">Tanggung Jawab</label>
                            <textarea id="tanggung_jawab" name="tanggung_jawab" class="form-control" required>{{ old('tanggung_jawab', $card->tanggung_jawab) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
