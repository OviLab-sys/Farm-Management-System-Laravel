@extends('layouts.app')

@section('content')
    <h1>Add New Crop</h1>
    <form action="{{ route('crops.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="crop_categories_id">Category ID:</label>
        <input type="text" name="crop_categories_id" required>
        <label for="planting_date">Planting Date:</label>
        <input type="date" name="planting_date" required>
        <label for="harvesting_date">Harvesting Date:</label>
        <input type="date" name="harvesting_date" required>
        <button type="submit">Add Crop</button>
    </form>
@endsection
