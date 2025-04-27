@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Groom Spa Service</h1>
    <form action="{{ route('groom-spa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" name="duration" id="duration" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection