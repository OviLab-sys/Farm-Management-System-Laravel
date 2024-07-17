@extends('layouts.app')

@section('content')
    <h1>Supplier Details</h1>
    <p>Name: {{ $supplier->name }}</p>
    <p>Phone Number: {{ $supplier->phone_number }}</p>
    <p>Address: {{ $supplier->address }}</p>
    <p>Supplies Type: {{ $supplier->supplies_type }}</p>
    <a href="{{ route('suppliers.edit', $supplier->id) }}">Edit</a>
    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
