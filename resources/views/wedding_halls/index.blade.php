@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Wedding Halls</h1>
    <a href="{{ route('wedding-halls.create') }}" class="btn btn-primary mb-3">Add New Hall</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Capacity</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weddingHalls as $hall)
            <tr>
                <td>{{ $hall->name }}</td>
                <td>${{ number_format($hall->price, 2) }}</td>
                <td>{{ $hall->capacity }}</td>
                <td>{{ $hall->location }}</td>
                <td>
                    <a href="{{ route('wedding-halls.show', $hall->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('wedding-halls.edit', $hall->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('wedding-halls.destroy', $hall->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection