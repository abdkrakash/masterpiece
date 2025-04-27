

@include('dashborde.include.top')


<div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
    @include('dashborde.include.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('dashborde.include.sidebar')
      @yield( 'content')
      <div class="container">
        <h2> Update Room </h2>
        <form action="{{ url('room_edit', $data->id) }}" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded-4 bg-light">
            @csrf
        
            <h2 class="mb-4 text-center text-primary">Edit Room Details</h2>
        
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Room Title</label>
                <input type="text" name="title" class="form-control form-control-lg" value="{{ $data->room_title }}" required>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" ...>{{ $data->description }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $data->price }}" required>
            </div>
            
            <div class="mb-3">
                <label>Room Type</label>
                <select name="room_type" class="form-control">
                    <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>
                    <option value="Reguler">Reguler</option>
                    <option value="premium">Premium</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
            </div>
            
        
            <div class="mb-3">
                <label class="form-label fw-bold">Free Wifi</label>
                <select name="wifi" class="form-select">
                    <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                    <option value="yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        
            <div class="mb-3">
                <label class="form-label fw-bold">Current Image</label><br>
                <img src="{{ asset('storage/room/' . $data->image) }}" alt="Room Image" class="img-thumbnail" style="max-width: 150px;">
            </div>
        
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Upload New Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        
            <div class="text-center">
                <button type="submit" class="btn btn-warning px-5 py-2 rounded-pill">Update Room</button>
            </div>
        </form>
        
    </div>
</div>
    </div>
    
    <!-- page-body-wrapper ends -->
    @include('dashborde.include.footer')
  </div>



  
  @include('dashborde.include.end')
