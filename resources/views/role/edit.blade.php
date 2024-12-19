@extends('layouts.app')

@section('content')
    <h1>Edit Role</h1>
    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $role->name }}">
        <button type="submit">Update</button>
    </form>
@endsection
