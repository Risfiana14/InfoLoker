@extends('layout.main')

@section('content')
<h1>Edit Job</h1>

<!-- Form Container -->
<div class="form-container">
    <form action="{{ route('job.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Job Title -->
        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" id="title" name="title" value="{{ $job->title }}" required class="form-input">
        </div>

        <!-- Location -->
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" value="{{ $job->location }}" required class="form-input">
        </div>

        <!-- Category -->
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" id="category" name="category" value="{{ $job->category }}" required class="form-input">
        </div>

        <!-- Salary -->
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" id="salary" name="salary" value="{{ $job->salary }}" required class="form-input">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Update Job</button>
    </form>
</div>

<!-- Styling for the form -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 30px;
        color: #333;
    }

    .form-container {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 8px;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fafafa;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        border-color: #007bff;
        background-color: #fff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
    }

    .submit-btn {
        width: 100%;
        padding: 14px;
        font-size: 1.1rem;
        color: white;
        background-color: #4CAF50;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #45a049;
    }

    .submit-btn:active {
        background-color: #388e3c;
    }
</style>

@endsection
