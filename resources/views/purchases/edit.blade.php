@extends('layouts.app')

@section('content')
    <h1>Edit Purchase</h1>
    <form action="{{ route('purchases.update', $purchase->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="stock_type">Stock Type:</label>
        <input type="text" name="stock_type" value="{{ $purchase->stock_type }}" required>
        <label for="supplier_id">Supplier ID:</label>
        <input type="number" name="supplier_id" value="{{ $purchase->supplier_id }}" required>
        <label for="purchase_date">Purchase Date:</label>
        <input type="date" name="purchase_date" value="{{ $purchase->purchase_date }}" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $purchase->quantity }}" required>
        <label for="total_cost">Total Cost:</label>
        <input type="number" name="total_cost" value="{{ $purchase->total_cost }}" required>
        <button type="submit">Update Purchase</button>
    </form>
@endsection