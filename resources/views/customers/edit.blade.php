@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" value="{{ $customer->full_name }}" required>
        <label for="phone_number">Phone Number:</label>
        <input type="number" name="phone_number" value="{{ $customer->phone_number }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $customer->email }}">
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $customer->address }}" required>
        <button type="submit">Update Customer</button>
    </form>
@endsection
