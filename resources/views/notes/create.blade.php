@extends('layout.main')

@section('content')
<div class="container">
    <h1>Buat Catatan Baru</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="created_at">Created At:</label>
            <input type="datetime-local" name="created_at" id="created_at" class="form-control">
        </div>
        <div class="form-group">
            <label for="updated_at">Updated At:</label>
            <input type="datetime-local" name="updated_at" id="updated_at" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
