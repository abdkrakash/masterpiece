@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $photography->name }}</h1>
    <p><strong>Description:</strong> {{ $photography->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($photography->price, 2) }}</p>
    <p><strong>Location:</strong> {{ $photography->location }}</p>

    <h3>Images</h3>
    <div class="row">
        @foreach ($photography->images as $image)
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $image->path) }}" class="img-fluid" alt="Photography Image">
        </div>
        @endforeach
    </div>

    <h3>Reviews</h3>
    <ul>
        @foreach ($photography->reviews as $review)
        <li>{{ $review->comment }} - {{ $review->user->name }}</li>
        @endforeach
    </ul>
</div>
@endsection