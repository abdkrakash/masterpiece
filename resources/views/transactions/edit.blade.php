@extends("dashborde.dashhome")
@section('content')
<div class="container">
    <h1>Edit Transaction</h1>
    <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Select User</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $transaction->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" value="{{ $transaction->amount }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="credit" {{ $transaction->type == 'credit' ? 'selected' : '' }}>Credit</option>
                <option value="debit" {{ $transaction->type == 'debit' ? 'selected' : '' }}>Debit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $transaction->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ $transaction->status == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
