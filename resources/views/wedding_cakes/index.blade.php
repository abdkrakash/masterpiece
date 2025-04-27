@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Wedding Cakes</h1>
    <a href="{{ route('wedding-cakes.create') }}" class="btn btn-primary mb-3">Add New Cake</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Flavor</th>
                <th>Size</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weddingCakes as $cake)
            <tr>
                <td>{{ $cake->id }}</td>
                <td>{{ $cake->name }}</td>
                <td>{{ $cake->price }}</td>
                <td>{{ $cake->flavor }}</td>
                <td>{{ $cake->size }}</td>
                <td>
                    <a href="{{ route('wedding-cakes.show', $cake->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('wedding-cakes.edit', $cake->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('wedding-cakes.destroy', $cake->id) }}" method="POST" style="display:inline;">
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
