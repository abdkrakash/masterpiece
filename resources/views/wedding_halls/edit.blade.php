@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Wedding Hall</h1>
    <form action="{{ route('wedding-halls.update', $weddingHall->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $weddingHall->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $weddingHall->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $weddingHall->price }}" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $weddingHall->capacity }}" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $weddingHall->location }}" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Upload New Images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection