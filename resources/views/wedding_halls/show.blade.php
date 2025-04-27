@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>{{ $weddingHall->hall_name }}</h1>
    <p><strong>Description:</strong> {{ $weddingHall->hall_description }}</p>
    <p><strong>Price:</strong> ${{ number_format($weddingHall->hall_price, 2) }}</p>
    <p><strong>Capacity:</strong> {{ $weddingHall->hall_capacity }}</p>
    <p><strong>Location:</strong> {{ $weddingHall->hall_location }}</p>

    <h3>Images</h3>
    <div class="row">
        @foreach ($weddingHall->images as $image)
        <div class="col-md-4">
            <img src="/{{ $image->image_path }}" class="img-fluid" alt="Hall Image">
        </div>
        @endforeach
    </div>

    <h3>Reviews</h3>
    <ul>
{{--        @foreach ($weddingHall->reviews as $review)--}}
{{--        <li>{{ $review->comment }} - {{ $review->user->name }}</li>--}}
{{--        @endforeach--}}
    </ul>
</div>
@endsection
