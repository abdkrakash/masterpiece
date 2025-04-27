@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>{{ $service->name }}</h1>
    <p><strong>Description:</strong> {{ $service->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>
    <p><strong>Duration:</strong> {{ $service->duration }} minutes</p>

    <a href="{{ route('groom-spa.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
