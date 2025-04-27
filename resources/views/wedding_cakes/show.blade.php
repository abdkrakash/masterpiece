@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>{{ $weddingCake->name }}</h1>
    <p><strong>Description:</strong> {{ $weddingCake->description }}</p>
    <p><strong>Price:</strong> ${{ $weddingCake->price }}</p>
    <p><strong>Flavor:</strong> {{ $weddingCake->flavor }}</p>
    <p><strong>Size:</strong> {{ $weddingCake->size }}</p>

    <h2>Images</h2>
    <div>
        @foreach ($weddingCake->images as $image)
        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $weddingCake->name }}" width="150">
        @endforeach
    </div>

    <h2>Reviews</h2>
    <div>
        @foreach ($weddingCake->reviews as $review)
        <p><strong>{{ $review->user->name }}:</strong> {{ $review->comment }}</p>
        @endforeach
    </div>

    <a href="{{ route('wedding-cakes.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
