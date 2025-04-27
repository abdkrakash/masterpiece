@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Photography Services</h1>
    <a href="{{ route('photography.create') }}" class="btn btn-primary mb-3">Add New Service</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photographies as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>${{ number_format($service->price, 2) }}</td>
                <td>{{ $service->location }}</td>
                <td>
                    <a href="{{ route('photography.show', $service->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('photography.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('photography.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
