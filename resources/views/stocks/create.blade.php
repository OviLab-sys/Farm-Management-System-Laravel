@extends('layouts.app')

@section('content')
    <h1>Add New Stock</h1>
    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <label for="stock_type">Stock Type:</label>
        <input type="text" name="stock_type" required>
        <label for="price">Price:</label>
        <input type="number" name="price" required>
        <label for="supplier_id">Supplier ID:</label>
        <input type="number" name="supplier_id" required>
        <button type="submit">Add Stock</button>
    </form>
@endsection
