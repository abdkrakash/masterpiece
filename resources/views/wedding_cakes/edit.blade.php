@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Wedding Cake</h1>
    <form action="{{ route('wedding-cakes.update', $weddingCake->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $weddingCake->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $weddingCake->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $weddingCake->price }}" required>
        </div>
        <div class="mb-3">
            <label for="flavor" class="form-label">Flavor</label>
            <input type="text" name="flavor" id="flavor" class="form-control" value="{{ $weddingCake->flavor }}" required>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $weddingCake->size }}" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection