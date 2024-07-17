@extends('layouts.app')

@section('content')
    <h1>Add New Purchase</h1>
    <form action="{{ route('purchases.store') }}" method="POST">
        @csrf
        <label for="stock_type">Stock Type:</label>
        <input type="text" name="stock_type" required>
        <label for="supplier_id">Supplier ID:</label>
        <input type="number" name="supplier_id" required>
        <label for="purchase_date">Purchase Date:</label>
        <input type="date" name="purchase_date" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <label for="total_cost">Total Cost:</label>
        <input type="number" name="total_cost" required>
        <button type="submit">Add Purchase</button>
    </form>
@endsection
