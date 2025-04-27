@extends("dashborde.dashhome")

@section('content')
    <div class="container">
        <h1>Edit Wedding Hall</h1>
        <form action="{{ route('wedding-halls.update', $weddingHall->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $weddingHall->hall_name }}" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $weddingHall->hall_description }}</textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $weddingHall->hall_price }}" required>
            </div>

            <!-- Capacity -->
            <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $weddingHall->hall_capacity }}" required>
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $weddingHall->hall_location }}" required>
            </div>

            <!-- Existing Images -->
            <div class="mb-3">
                <label class="form-label">Existing Images</label>
                <div class="row">
                    @foreach ($weddingHall->images as $image)
                        <div class="col-md-3 mb-3">
                            <img src="/{{ $image->image_path }}" class="img-fluid" alt="Hall Image">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="delete_images[]" value="{{ $image->id }}">
                                <label class="form-check-label">Delete</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- New Images -->
            <div class="mb-3">
                <label for="images" class="form-label">Upload New Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
