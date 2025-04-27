@extends("dashborde.dashhome")

@section('content')
    <div class="container">
        <h1>Edit Wedding Car</h1>
        <form action="{{ route('wedding-cars.update', $weddingCar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $weddingCar->Cars_name }}" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $weddingCar->Cars_description }}</textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $weddingCar->Cars_price }}" required>
            </div>

            <!-- Model Year -->
            <div class="mb-3">
                <label for="model_year" class="form-label">Model Year</label>
                <input type="number" class="form-control" id="model_year" name="model_year" value="{{ $weddingCar->Car_model }}" required>
            </div>

            <!-- Color -->
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $weddingCar->Car_color }}">
            </div>

            <!-- Rental Duration -->
            <div class="mb-3">
                <label for="rental_duration" class="form-label">Rental Duration (in days)</label>
                <input type="number" class="form-control" id="rental_duration" name="rental_duration" value="{{ $weddingCar->Car_rental_duration }}">
            </div>

            <!-- Availability -->
            <div class="mb-3">
                <label for="availability" class="form-label">Availability</label>
                <select class="form-select" id="availability" name="availability">
                    <option value="1" {{ $weddingCar->Car_availability ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ !$weddingCar->Car_availability ? 'selected' : '' }}>Not Available</option>
                </select>
            </div>

            <!-- Existing Images -->
            <div class="mb-3">
                <label class="form-label">Existing Images</label>
                <div class="row">
                    @foreach ($weddingCar->images as $image)
                        <div class="col-md-3 mb-3">
                            <img src="/{{ $image->images_path }}" class="img-fluid" alt="Car Image">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Upload New Images -->
            <div class="mb-3">
                <label for="images" class="form-label">Upload New Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
