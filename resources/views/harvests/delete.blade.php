@extends('layouts.app')

@section('content')
    <h1>Harvest Details</h1>
    <p>Crop ID: {{ $harvest->crop_id }}</p>
    <p>Harvest Date: {{ $harvest->harvest_date }}</p>
    <p>Quantity: {{ $harvest->quantity }}</p>
    <p>Quality: {{ $harvest->quality }}</p>
    <a href="{{ route('harvests.edit', $harvest->id) }}">Edit</a>
    <form action="{{ route('harvests.destroy', $harvest->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
