@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Select User</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" name="total_amount" id="total_amount" class="form-control" step="0.01" value="{{ $order->total_amount }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection