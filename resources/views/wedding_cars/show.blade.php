@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>{{ $weddingCar->name }}</h1>
    <p><strong>Description:</strong> {{ $weddingCar->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($weddingCar->price, 2) }}</p>
    <p><strong>Model Year:</strong> {{ $weddingCar->model_year }}</p>
    <p><strong>Location:</strong> {{ $weddingCar->location }}</p>

    <h3>Images</h3>
    <div class="row">
        @foreach ($weddingCar->images as $image)
        <div class="col-md-4">
            <img src="/{{ $image->images_path }}" class="img-fluid" alt="Car Image">

        </div>
        @endforeach
    </div>

    <h3>Reviews</h3>
    <ul>
        @foreach ($weddingCar->reviews as $review)
        <li>{{ $review->comment }} - {{ $review->user->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
