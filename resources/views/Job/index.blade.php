@extends('layout.main')

@section('content')
<h1>Job Listings</h1>
<a href="{{ route('jobs.create') }}">Create New Job</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach ($jobs as $job)
        <li>
            <strong>{{ $job->title }}</strong><br>
            Location: {{ $job->location }}<br>
            Category: {{ $job->category }}<br>
            Salary: {{ $job->salary }}
        </li>
    @endforeach
</ul>
@endsection
