<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search</title>
</head>
<body>
    <h1>Job Search</h1>

    <form action="{{ route('jobs.index') }}" method="GET">
        <input type="text" name="title" placeholder="Search by title" value="{{ request('title') }}">
        <input type="text" name="location" placeholder="Location" value="{{ request('location') }}">
        <input type="text" name="category" placeholder="Category" value="{{ request('category') }}">
        <input type="number" name="min_salary" placeholder="Min Salary" value="{{ request('min_salary') }}">
        <input type="number" name="max_salary" placeholder="Max Salary" value="{{ request('max_salary') }}">
        <button type="submit">Search</button>
    </form>

    <h2>Job Listings</h2>
    <ul>
        @forelse($jobs as $job)
            <li>
                <strong>{{ $job->title }}</strong><br>
                Location: {{ $job->location }}<br>
                Category: {{ $job->category }}<br>
                Salary: {{ $job->salary }}
            </li>
        @empty
            <li>No jobs found.</li>
        @endforelse
    </ul>

    {{ $jobs->links() }}
</body>
</html>
