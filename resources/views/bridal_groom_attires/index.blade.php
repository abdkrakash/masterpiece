@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Bridal Groom Attires</h1>
    <a href="{{ route('bridal-groom-attires.create') }}" class="btn btn-primary mb-3">Add New Attire</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Type</th>
                <th>Size</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attires as $attire)
            <tr>
                <td>{{ $attire->id }}</td>
                <td>{{ $attire->name }}</td>
                <td>{{ $attire->price }}</td>
                <td>{{ $attire->type }}</td>
                <td>{{ $attire->size }}</td>
                <td>
                    <a href="{{ route('bridal-groom-attires.show', $attire->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('bridal-groom-attires.edit', $attire->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('bridal-groom-attires.destroy', $attire->id) }}" method="POST" style="display:inline;">
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
