@extends('layouts.app')

@section('content')
    <h1>Add New Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <label for="supplies_type">Supplies Type:</label>
        <input type="text" name="supplies_type" required>
        <button type="submit">Add Supplier</button>
    </form>
@endsection
