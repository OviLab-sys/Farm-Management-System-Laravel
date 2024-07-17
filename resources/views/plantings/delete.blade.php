@extends('layouts.app')

@section('content')
    <h1>Planting Details</h1>
    <p>Crop ID: {{ $planting->crops_id }}</p>
    <p>Planting Date: {{ $planting->planting_date }}</p>
    <p>Expected Harvest Date: {{ $planting->expected_harvest_date }}</p>
    <p>Quantity Planted: {{ $planting->quantity_planted }}</p>
    <a href="{{ route('plantings.edit', $planting->id) }}">Edit</a>
    <form action="{{ route('plantings.destroy', $planting->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
