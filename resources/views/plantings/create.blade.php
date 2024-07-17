@extends('layouts.app')

@section('content')
    <h1>Add New Planting</h1>
    <form action="{{ route('plantings.store') }}" method="POST">
        @csrf
        <label for="crops_id">Crop ID:</label>
        <input type="number" name="crops_id" required>
        <label for="planting_date">Planting Date:</label>
        <input type="date" name="planting_date" required>
        <label for="expected_harvest_date">Expected Harvest Date:</label>
        <input type="date" name="expected_harvest_date" required>
        <label for="quantity_planted">Quantity Planted:</label>
        <input type="text" name="quantity_planted" required>
        <button type="submit">Add Planting</button>
    </form>
@endsection
