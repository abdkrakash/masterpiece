@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $weddingHall->name }}</h1>
    <p><strong>Description:</strong> {{ $weddingHall->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($weddingHall->price, 2) }}</p>
    <p><strong>Capacity:</strong> {{ $weddingHall->capacity }}</p>
    <p><strong>Location:</strong> {{ $weddingHall->location }}</p>

    <h3>Images</h3>
    <div class="row">
        @foreach ($weddingHall->images as $image)
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $image->path) }}" class="img-fluid" alt="Hall Image">
        </div>
        @endforeach
    </div>

    <h3>Reviews</h3>
    <ul>
        @foreach ($weddingHall->reviews as $review)
        <li>{{ $review->comment }} - {{ $review->user->name }}</li>
        @endforeach
    </ul>
</div>
@endsection