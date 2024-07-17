@extends('layouts.app')

@section('content')
    <h1>All Expenses</h1>
    <a href="{{ route('expenses.create') }}">Add New Expense</a>
    <ul>
        @foreach($expenses as $expense)
            <li>
                <a href="{{ route('expenses.show', $expense->id) }}">{{ $expense->description }}</a>
            </li>
        @endforeach
    </ul>
@endsection
