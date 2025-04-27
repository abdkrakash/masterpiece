@extends("dashborde.dashhome")

@section('content')
    <div class="container">
        <h1>Create New Wedding Car</h1>
        <form action="{{ route('wedding-cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>

            <!-- Model Year -->
            <div class="mb-3">
                <label for="model_year" class="form-label">Model Year</label>
                <input type="number" class="form-control" id="model_year" name="model_year" required>
            </div>

            <!-- Color -->
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color">
            </div>

            <!-- Rental Duration -->
            <div class="mb-3">
                <label for="rental_duration" class="form-label">Rental Duration (in days)</label>
                <input type="number" class="form-control" id="rental_duration" name="rental_duration">
            </div>

            <!-- Availability -->
            <div class="mb-3">
                <label for="availability" class="form-label">Availability</label>
                <select class="form-select" id="availability" name="availability">
                    <option value="1" selected>Available</option>
                    <option value="0">Not Available</option>
                </select>
            </div>

            <!-- Images -->
            <div class="mb-3">
                <label for="images" class="form-label">Upload Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
