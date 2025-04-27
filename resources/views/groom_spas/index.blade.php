@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Groom Spa Services</h1>
    <a href="{{ route('groom-spa.create') }}" class="btn btn-primary mb-3">Add New Service</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Duration (minutes)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>${{ number_format($service->price, 2) }}</td>
                <td>{{ $service->duration }} minutes</td>
                <td>
                    <a href="{{ route('groom-spa.show', $service->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('groom-spa.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('groom-spa.destroy', $service->id) }}" method="POST" style="display:inline;">
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
