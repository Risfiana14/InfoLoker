@extends('layout.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Edit Profile</h4>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="no_ktp" class="form-label">No. KTP</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp"
                    value="{{ old('no_ktp', $user->no_ktp) }}">
            </div>

            <div class="mb-3">
                <label for="no_kk" class="form-label">No. KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk"
                    value="{{ old('no_kk', $user->no_kk) }}">
            </div>

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                    value="{{ old('nama_lengkap', $user->nama_lengkap) }}">
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}">
            </div>

            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                    value="{{ old('tempat_lahir', $user->tempat_lahir) }}">
            </div>

            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi"
                    value="{{ old('provinsi', $user->provinsi) }}">
            </div>

            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                    value="{{ old('pendidikan', $user->pendidikan) }}">
            </div>

            <div class="mb-3">
                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah"
                    value="{{ old('nama_sekolah', $user->nama_sekolah) }}">
            </div>

            <div class="mb-3">
                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus"
                    value="{{ old('tahun_lulus', $user->tahun_lulus) }}">
            </div>

            <div class="mb-3">
                <label for="no_ijazah" class="form-label">No. Ijazah</label>
                <input type="text" class="form-control" id="no_ijazah" name="no_ijazah"
                    value="{{ old('no_ijazah', $user->no_ijazah) }}">
            </div>

            <div class="mb-3">
                <label for="tanggal_ijazah" class="form-label">Tanggal Ijazah</label>
                <input type="date" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah"
                    value="{{ old('tanggal_ijazah', $user->tanggal_ijazah) }}">
            </div>

            <div class="mb-3">
                <label for="nilai_rata_rata" class="form-label">Nilai Rata-rata</label>
                <input type="number" step="0.01" class="form-control" id="nilai_rata_rata" name="nilai_rata_rata"
                    value="{{ old('nilai_rata_rata', $user->nilai_rata_rata) }}">
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama"
                    value="{{ old('agama', $user->agama) }}">
            </div>

            <div class="mb-3">
                <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                    <option value="Belum Kawin" {{ $user->status_perkawinan == 'Belum Kawin' ? 'selected' : '' }}>Belum
                        Kawin</option>
                    <option value="Kawin" {{ $user->status_perkawinan == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                    <option value="Cerai Hidup" {{ $user->status_perkawinan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai
                        Hidup</option>
                    <option value="Cerai Mati" {{ $user->status_perkawinan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan"
                    value="{{ old('tinggi_badan', $user->tinggi_badan) }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat', $user->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No. HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp"
                    value="{{ old('no_hp', $user->no_hp) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>

    </div>
@endsection
