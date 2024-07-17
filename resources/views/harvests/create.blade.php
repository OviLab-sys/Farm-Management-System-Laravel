@extends('layouts.app')

@section('content')
    <h1>Add New Harvest</h1>
    <form action="{{ route('harvests.store') }}" method="POST">
        @csrf
        <label for="crop_id">Crop ID:</label>
        <input type="number" name="crop_id" required>
        <label for="harvest_date">Harvest Date:</label>
        <input type="date" name="harvest_date" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity">
        <label for="quality">Quality:</label>
        <input type="text" name="quality" required>
        <button type="submit">Add Harvest</button>
    </form>
@endsection
