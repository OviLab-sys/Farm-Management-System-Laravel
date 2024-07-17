@extends('layouts.app')

@section('content')
    <h1>Edit Harvest</h1>
    <form action="{{ route('harvests.update', $harvest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="crop_id">Crop ID:</label>
        <input type="number" name="crop_id" value="{{ $harvest->crop_id }}" required>
        <label for="harvest_date">Harvest Date:</label>
        <input type="date" name="harvest_date" value="{{ $harvest->harvest_date }}" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $harvest->quantity }}">
        <label for="quality">Quality:</label>
        <input type="text" name="quality" value="{{ $harvest->quality }}" required>
        <button type="submit">Update Harvest</button>
    </form>
@endsection
