@extends('layouts.app')

@section('content')
    <h1>Edit Crop</h1>
    <form action="{{ route('crops.update', $crop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $crop->name }}" required>
        <label for="crop_categories_id">Category ID:</label>
        <input type="text" name="crop_categories_id" value="{{ $crop->crop_categories_id }}" required>
        <label for="planting_date">Planting Date:</label>
        <input type="date" name="planting_date" value="{{ $crop->planting_date }}" required>
        <label for="harvesting_date">Harvesting Date:</label>
        <input type="date" name="harvesting_date" value="{{ $crop->harvesting_date }}" required>
        <button type="submit">Update Crop</button>
    </form>
@endsection
