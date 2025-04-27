@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transaction Details</h1>
    <p><strong>ID:</strong> {{ $transaction->id }}</p>
    <p><strong>User:</strong> {{ $transaction->user->name }}</p>
    <p><strong>Amount:</strong> ${{ number_format($transaction->amount, 2) }}</p>
    <p><strong>Type:</strong> {{ ucfirst($transaction->type) }}</p>
    <p><strong>Status:</strong> {{ ucfirst($transaction->status) }}</p>
    <p><strong>Created At:</strong> {{ $transaction->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $transaction->updated_at }}</p>

    <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection