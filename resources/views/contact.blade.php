@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>

    {{-- Tampilkan Pesan Sukses --}}
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Informasi Kontak --}}
    <div class="mb-4">
        <h2>Company Address:</h2>
        <p>1234 Street Name,</p>
        <p>City, State, ZIP Code</p>

        <h2>Email:</h2>
        <p>info@company.com</p>

        <h2>Phone:</h2>
        <p>+1 (123) 456-7890</p>
    </div>

    {{-- Formulir Kontak --}}
    <h2>Send Us a Message:</h2>
    <form action="{{ route('contact.contact') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
