@extends('layouts.app')

@section('content')
    <h1>{{ $expense->description }}</h1>
    <p>Amount: {{ $expense->amount }}</p>
    <p>Expense Date: {{ $expense->expense_date }}</p>
    <p>Expense Category: {{ $expense->expense_category }}</p>
    <a href="{{ route('expenses.edit', $expense->id) }}">Edit</a>
    <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
