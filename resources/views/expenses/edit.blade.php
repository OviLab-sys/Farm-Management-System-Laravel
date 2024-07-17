@extends('layouts.app')

@section('content')
    <h1>Edit Expense</h1>
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ $expense->description }}" required>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" value="{{ $expense->amount }}" required>
        <label for="expense_date">Expense Date:</label>
        <input type="date" name="expense_date" value="{{ $expense->expense_date }}" required>
        <label for="expense_category">Expense Category:</label>
        <input type="text" name="expense_category" value="{{ $expense->expense_category }}" required>
        <button type="submit">Update Expense</button>
    </form>
@endsection
