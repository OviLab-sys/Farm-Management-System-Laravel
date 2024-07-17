@extends('layouts.app')

@section('content')
    <h1>Stock Details</h1>
    <p>Name: {{ $stock->name }}</p>
    <p>Quantity: {{ $stock->quantity }}</p>
    <p>Stock Type: {{ $stock->stock_type }}</p>
    <p>Price: {{ $stock->price }}</p>
    <p>Supplier ID: {{ $stock->supplier_id }}</p>
    <a href="{{ route('stocks.edit', $stock->id) }}">Edit</a>
    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
