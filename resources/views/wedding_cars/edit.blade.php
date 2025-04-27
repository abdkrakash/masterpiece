@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Wedding Car</h1>
    <form action="{{ route('wedding-cars.update', $weddingCar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $weddingCar->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $weddingCar->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $weddingCar->price }}" required>
        </div>
        <div class="mb-3">
            <label for="model_year" class="form-label">Model Year</label>
            <input type="number" class="form-control" id="model_year" name="model_year" value="{{ $weddingCar->model_year }}" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $weddingCar->location }}" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Upload New Images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection