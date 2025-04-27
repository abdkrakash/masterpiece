@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add New Order</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>${{ number_format($order->total_amount, 2) }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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
