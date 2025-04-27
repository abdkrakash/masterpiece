@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p><strong>ID:</strong> {{ $order->id }}</p>
    <p><strong>User:</strong> {{ $order->user->name }}</p>
    <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p><strong>Created At:</strong> {{ $order->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $order->updated_at }}</p>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
