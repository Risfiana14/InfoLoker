@extends('layouts.app')

@section('content')
    <h1>Roles</h1>
    <a href="{{ route('roles.create') }}">Create Role</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
