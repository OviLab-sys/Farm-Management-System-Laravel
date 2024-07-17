@extends('layouts.app')

@section('content')
    <h1>Add New Fertilizer Application</h1>
    <form action="{{ route('fertilizer_applications.store') }}" method="POST">
        @csrf
        <label for="stock_id">Stock ID:</label>
        <input type="number" name="stock_id" required>
        <label for="application_date">Application Date:</label>
        <input type="date" name="application_date" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <button type="submit">Add Application</button>
    </form>
@endsection
