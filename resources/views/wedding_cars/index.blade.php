@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Wedding Cars</h1>
    <a href="{{ route('wedding-cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Model Year</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weddingCars as $car)
            <tr>
                <td>{{ $car->name }}</td>
                <td>${{ number_format($car->price, 2) }}</td>
                <td>{{ $car->model_year }}</td>
                <td>{{ $car->location }}</td>
                <td>
                    <a href="{{ route('wedding-cars.show', $car->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('wedding-cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('wedding-cars.destroy', $car->id) }}" method="POST" style="display:inline;">
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