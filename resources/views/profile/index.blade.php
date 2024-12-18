@extends('layout.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">{{ isset($user) ? 'Edit Data User' : 'Tambah Data User' }}</h4>

        <!-- Menampilkan pesan sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <h5 class="card-header">{{ isset($user) ? 'Edit Data Pengguna' : 'Form Tambah Pengguna' }}</h5>
                    <div class="card-body">
                        <!-- Form untuk tambah/edit data pengguna -->
                        <form action="{{ isset($user) ? route('user.update', $user->iduser) : route('user.store') }}" method="POST">
                            @csrf
                            @if (isset($user))
                                @method('PUT')
                            @endif

                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control"
                                    value="{{ old('username', isset($user) ? $user->username : '') }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Minimal 6 karakter" {{ isset($user) ? '' : 'required' }}>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="idrole">Role</label>
                                <select name="idrole" id="idrole" class="form-select">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->idrole }}"
                                            {{ isset($user) && $user->idrole == $role->idrole ? 'selected' : '' }}>
                                            {{ $role->nama_role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="no_hp">Nomor HP</label>
                                <input type="text" id="no_hp" name="no_hp" class="form-control"
                                    value="{{ old('no_hp', isset($user) ? $user->no_hp : '') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="alamat">Alamat</label>
                                <textarea id="alamat" name="alamat" class="form-control">{{ old('alamat', isset($user) ? $user->alamat : '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($user) ? 'Update Data' : 'Tambah Data' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tabel Data Pengguna -->
                <div class="row mt-4">
                    <div class="col-xl">
                        <div class="card">
                            <h5 class="card-header">Daftar Pengguna</h5>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Nomor HP</th>
                                            <th>Alamat</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->iduser }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->nama_role }}</td>
                                                <td>{{ $user->no_hp }}</td>
                                                <td>{{ $user->alamat }}</td>
                                                <td>
                                                    <!-- Edit -->
                                                    <a href="{{ route('user.edit', $user->iduser) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <!-- Hapus -->
                                                    <form action="{{ route('user.destroy', $user->iduser) }}" method="post" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
        </div>
    </div>
@endsection
