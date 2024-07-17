@extends('layouts.app')

@section('content')
    <h1>Add New Sale</h1>
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <label for="stored_crops_id">Stored Crops ID:</label>
        <input type="number" name="stored_crops_id" required>
        <label for="sales_date">Sales Date:</label>
        <input type="date" name="sales_date" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <label for="price_per_unit">Price per Unit:</label>
        <input type="number" name="price_per_unit" required>
        <label for="total_price">Total Price (optional):</label>
        <input type="number" name="total_price">
        <label for="customer_id">Customer ID:</label>
        <input type="number" name="customer_id" required>
        <button type="submit">Add Sale</button>
    </form>
@endsection
