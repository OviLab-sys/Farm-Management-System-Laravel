@extends('layouts.app')

@section('content')
    <h1>Add New Pesticide Application</h1>
    <form action="{{ route('pesticide_applications.store') }}" method="POST">
        @csrf
        <label for="crop_id">Crop ID:</label>
        <input type="number" name="crop_id" required>
        <label for="pesticide_name">Pesticide Name:</label>
        <input type="text" name="pesticide_name" required>
        <label for="application_date">Application Date:</label>
        <input type="date" name="application_date" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <button type="submit">Add Pesticide Application</button>
    </form>
@endsection
