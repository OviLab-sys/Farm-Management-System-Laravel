@extends('layouts.app')

@section('content')
    <h1>Add New Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>
        <label for="phone_number">Phone Number:</label>
        <input type="number" name="phone_number" required>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <button type="submit">Add Customer</button>
    </form>
@endsection
