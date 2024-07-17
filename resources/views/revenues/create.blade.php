@extends('layouts.app')

@section('content')
    <h1>Add New Revenue</h1>
    <form action="{{ route('revenues.store') }}" method="POST">
        @csrf
        <label for="sale_id">Sale ID:</label>
        <input type="number" name="sale_id" required>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" required>
        <label for="revenue_date">Revenue Date:</label>
        <input type="date" name="revenue_date" required>
        <button type="submit">Add Revenue</button>
    </form>
@endsection
