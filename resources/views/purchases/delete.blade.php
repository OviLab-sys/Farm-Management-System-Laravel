@extends('layouts.app')

@section('content')
    <h1>Purchase Details</h1>
    <p>Stock Type: {{ $purchase->stock_type }}</p>
    <p>Supplier ID: {{ $purchase->supplier_id }}</p>
    <p>Purchase Date: {{ $purchase->purchase_date }}</p>
    <p>Quantity: {{ $purchase->quantity }}</p>
    <p>Total Cost: {{ $purchase->total_cost }}</p>
    <a href="{{ route('purchases.edit', $purchase->id) }}">Edit</a>
    <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection