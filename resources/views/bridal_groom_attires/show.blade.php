@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $attire->name }}</h1>
    <p><strong>Description:</strong> {{ $attire->description }}</p>
    <p><strong>Price:</strong> ${{ $attire->price }}</p>
    <p><strong>Type:</strong> {{ $attire->type }}</p>
    <p><strong>Size:</strong> {{ $attire->size }}</p>

    <h2>Images</h2>
    <div>
        @foreach ($attire->images as $image)
        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $attire->name }}" width="150">
        @endforeach
    </div>

    <h2>Reviews</h2>
    <div>
        @foreach ($attire->reviews as $review)
        <p><strong>{{ $review->user->name }}:</strong> {{ $review->comment }}</p>
        @endforeach
    </div>

    <a href="{{ route('bridal-groom-attires.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection