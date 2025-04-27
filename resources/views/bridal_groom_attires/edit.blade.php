@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Bridal Groom Attire</h1>
    <form action="{{ route('bridal-groom-attires.update', $attire->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $attire->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $attire->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $attire->price }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $attire->type }}" required>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $attire->size }}" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection