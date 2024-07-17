@extends('layouts.app')

@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $supplier->name }}" required>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="{{ $supplier->phone_number }}" required>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $supplier->address }}" required>
        <label for="supplies_type">Supplies Type:</label>
        <input type="text" name="supplies_type" value="{{ $supplier->supplies_type }}" required>
        <button type="submit">Update Supplier</button>
    </form>
@endsection
