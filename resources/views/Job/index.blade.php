@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Job Listings</h1>
    
    <!-- Create New Job Button -->
    <div class="mb-4 text-center">
        <a href="{{ route('job.create') }}" class="btn btn-custom">Create New Job</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif

    <!-- Job Listings Table -->
    <div class="table-responsive">
        <table id="jobsTable" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->category }}</td>
                        <td>{{ $job->salary }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('job.edit', $job->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('job.destroy', $job->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Include jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize the DataTable
        $('#jobsTable').DataTable();
    });
</script>

<!-- Styling for the page -->
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 2rem;
        color: #333;
        font-weight: 600;
    }

    .container {
        width: 90%;
        margin: 0 auto;
        padding: 30px;
    }

    .btn-custom {
        background-color: #4CAF50;
        color: white;
        font-size: 1rem;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-custom:hover {
        background-color: #45a049;
    }

    .table-responsive {
        margin-top: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #343a40;
        color: white;
        font-size: 1rem;
    }

    td {
        background-color: #ffffff;
        font-size: 1rem;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .action-buttons {
        text-align: center;
    }

    .btn {
        font-size: 0.9rem;
        padding: 8px 16px;
        border-radius: 5px;
        margin-right: 5px;
        transition: all 0.3s ease;
    }

    .btn-warning {
        background-color: #f0ad4e;
        color: white;
    }

    .btn-warning:hover {
        background-color: #ec971f;
    }

    .btn-danger {
        background-color: #d9534f;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>

@endsection
