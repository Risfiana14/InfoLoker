@extends('layout.main')

@section('content')
<div class="profile-container">
    <div class="profile-card">
        <div class="profile-header">
            <img src="{{ asset('images/user-profile.jpg') }}" alt="User Profile" class="profile-img">
            <h2>{{ $user->name }}</h2>
            <p class="profile-role">{{ $user->role }}</p>
        </div>

        <div class="profile-body">
            <div class="profile-info">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Phone:</strong> {{ $user->phone }}</p>
                <p><strong>Location:</strong> {{ $user->location }}</p>
                <p><strong>Joined:</strong> {{ $user->created_at->format('F d, Y') }}</p>
            </div>

            <div class="profile-actions">
                <a href="{{ route('profile.edit') }}" class="edit-btn">Edit Profile</a>
                <form action="{{ route('profile.destroy') }}" method="POST" class="delete-form" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Styling for the profile page -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
    }

    .profile-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 20px;
    }

    .profile-card {
        background-color: #fff;
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .profile-header {
        background-color: #6e7dff;
        color: white;
        text-align: center;
        padding: 20px;
        position: relative;
    }

    .profile-header .profile-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid white;
        position: absolute;
        top: -60px;
        left: 50%;
        transform: translateX(-50%);
    }

    .profile-header h2 {
        margin-top: 60px;
        font-size: 1.8rem;
        font-weight: 600;
    }

    .profile-role {
        font-size: 1.1rem;
        color: #f1f1f1;
        margin-top: 5px;
    }

    .profile-body {
        padding: 20px;
        background-color: #fff;
    }

    .profile-info p {
        font-size: 1rem;
        color: #333;
        margin-bottom: 10px;
    }

    .profile-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .edit-btn, .delete-btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        width: 48%;
    }

    .edit-btn {
        background-color: #5c6bc0;
        color: white;
        border: none;
        transition: background-color 0.3s;
    }

    .edit-btn:hover {
        background-color: #4f5b91;
    }

    .delete-btn {
        background-color: #e57373;
        color: white;
        border: none;
        transition: background-color 0.3s;
    }

    .delete-btn:hover {
        background-color: #f44336;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .profile-card {
            width: 90%;
        }

        .profile-header h2 {
            font-size: 1.6rem;
        }

        .profile-role {
            font-size: 1rem;
        }
    }
</style>

@endsection
