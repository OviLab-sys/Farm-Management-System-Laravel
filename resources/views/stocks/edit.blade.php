@extends('layouts.app')

@section('content')
    <h1>Edit Stock</h1>
    <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $stock->name }}" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $stock->quantity }}" required>
        <label for="stock_type">Stock Type:</label>
        <input type="text" name="stock_type" value="{{ $stock->stock_type }}" required>
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $stock->price }}" required>
        <label for="supplier_id">Supplier ID:</label>
        <input type="number" name="supplier_id" value="{{ $stock->supplier_id }}" required>
        <button type="submit">Update Stock</button>
    </form>
@endsection
