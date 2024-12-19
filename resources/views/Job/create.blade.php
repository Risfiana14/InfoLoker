@extends('layout.main')

@section('content')
<h1>Create Job</h1>

<form action="{{ route('job.store') }}" method="POST" class="job-form">
    @csrf
    <table class="form-table">
        <tr>
            <td><label for="title">No</label></td>
            <td><input type="text" name="title" id="title" required></td>
        </tr>
        <tr>
            <td><label for="title">Job Title</label></td>
            <td><input type="text" name="title" id="title" required></td>
        </tr>
        <tr>
            <td><label for="location">Location</label></td>
            <td><input type="text" name="location" id="location" required></td>
        </tr>
        <tr>
            <td><label for="category">Category</label></td>
            <td><input type="text" name="category" id="category" required></td>
        </tr>
        <tr>
            <td><label for="salary">Salary</label></td>
            <td><input type="number" name="salary" id="salary" required></td>
        </tr>
        <tr>
            <td colspan="2" class="submit-cell">
                <button type="submit" class="submit-btn">Save</button>
            </td>
        </tr>
    </table>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fc;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .job-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
    }

    .form-table {
        width: 100%;
        border-collapse: collapse;
    }

    .form-table td {
        padding: 12px;
        vertical-align: middle;
    }

    .form-table label {
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
        outline: none;
        border-color: #5c6bc0;
        box-shadow: 0 0 5px rgba(92, 107, 192, 0.5);
    }

    .submit-cell {
        text-align: center;
    }

    .submit-btn {
        background-color: #5c6bc0;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        width: 100%;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #4f5b91;
    }

    .submit-btn:active {
        background-color: #3e4971;
    }
</style>

@endsection
