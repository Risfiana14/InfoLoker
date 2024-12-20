@extends('layout.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Form Tambah Card</h4>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <h5 class="card-header">Form Tambah Card</h5>
                    <div class="card-body">
                        <form action="{{ route('loker.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="tgl_lamaran" class="form-label">Tanggal Lamaran</label>
                                <input type="date" id="tgl_lamaran" name="tgl_lamaran" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="bidang" class="form-label">Bidang</label>
                                <input type="text" id="bidang" name="bidang" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori1" class="form-label">Kategori 1</label>
                                <input type="text" id="kategori1" name="kategori1" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori2" class="form-label">Kategori 2</label>
                                <input type="text" id="kategori2" name="kategori2" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori3" class="form-label">Kategori 3</label>
                                <input type="text" id="kategori3" name="kategori3" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="gaji" class="form-label">Gaji</label>
                                <input type="number" id="gaji" name="gaji" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" id="lokasi" name="lokasi" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="kualifikasi" class="form-label">Kualifikasi</label>
                                <textarea id="kualifikasi" name="kualifikasi" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggung_jawab" class="form-label">Tanggung Jawab</label>
                                <textarea id="tanggung_jawab" name="tanggung_jawab" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
