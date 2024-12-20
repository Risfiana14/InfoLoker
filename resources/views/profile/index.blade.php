@extends('layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Profile</h4>

    <!-- Success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Your Profile</h5>
        <div class="card-body">
            <ul>
                <li><strong>Name:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Tempat Lahir:</strong> {{ $user->tempat_lahir }}</li>
                <li><strong>Alamat:</strong> {{ $user->alamat }}</li>
                <li><strong>No. HP:</strong> {{ $user->no_hp }}</li>
            </ul>

            <a href="{{ route('profile.edit') }}" class="btn btn-warning">Edit Profile</a>

            <!-- Delete Account -->
            <form action="{{ route('profile.destroy') }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete your account?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Account</button>
            </form>
        </div>
    </div>
</div>
@endsection
