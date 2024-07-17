@extends('layouts.app')

@section('content')
    <h1>Add New Expense</h1>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <label for="description">Description:</label>
        <input type="text" name="description" required>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" required>
        <label for="expense_date">Expense Date:</label>
        <input type="date" name="expense_date" required>
        <label for="expense_category">Expense Category:</label>
        <input type="text" name="expense_category" required>
        <button type="submit">Add Expense</button>
    </form>
@endsection
