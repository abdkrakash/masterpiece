@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Transactions</h1>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add New Transaction</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>${{ number_format($transaction->amount, 2) }}</td>
                <td>{{ ucfirst($transaction->type) }}</td>
                <td>{{ ucfirst($transaction->status) }}</td>
                <td>
                    <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
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
