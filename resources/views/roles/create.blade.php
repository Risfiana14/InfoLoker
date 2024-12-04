@extends('layouts.app')

@section('content')
    <h1>Create Role</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        <button type="submit">Save</button>
    </form>
@endsection
