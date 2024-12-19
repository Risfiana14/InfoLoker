@extends('layout.main')

@section('content')
<h1>Edit Job</h1>

<form action="{{ route('job.update', $job->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $job->title }}" required>
    
    <label for="location">Location</label>
    <input type="text" name="location" value="{{ $job->location }}" required>
    
    <label for="category">Category</label>
    <input type="text" name="category" value="{{ $job->category }}" required>
    
    <label for="salary">Salary</label>
    <input type="number" name="salary" value="{{ $job->salary }}" required>
    
    <button type="submit">Update</button>
</form>
@endsection
