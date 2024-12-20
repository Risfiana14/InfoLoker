@extends('layout.main')

@section('content')
<div class="container">
    <h1>Daftar Catatan</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Tambah Catatan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($notes as $note)
            <tr>
                <td>{{ $note->id }}</td>
                <td>{{ $note->created_at }}</td>
                <td>{{ $note->updated_at }}</td>
                <td>
                    <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus catatan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada catatan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
@endsection
