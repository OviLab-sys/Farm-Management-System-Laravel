@extends('layouts.app')

@section('content')
    <h1>Sale Details</h1>
    <p>Stored Crops ID: {{ $sale->stored_crops_id }}</p>
    <p>Sales Date: {{ $sale->sales_date }}</p>
    <p>Quantity: {{ $sale->quantity }}</p>
    <p>Price per Unit: {{ $sale->price_per_unit }}</p>
    <p>Total Price: {{ $sale->total_price }}</p>
    <p>Customer ID: {{ $sale->customer_id }}</p>
    <a href="{{ route('sales.edit', $sale->id) }}">Edit</a>
    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection