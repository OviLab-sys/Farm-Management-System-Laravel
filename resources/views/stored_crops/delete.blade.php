@extends('layouts.app')

@section('content')
    <h1>Stored Crop Details</h1>
    <p>Crop: {{ $storedCrop->crop->name }}</p>
    <p>Quantity: {{ $storedCrop->quantity }}</p>
    <p>Storage Date: {{ $storedCrop->storage_date }}</p>
    <p>Storage: {{ $storedCrop->storage->location }}</p>
    <p>Harvest: {{ $storedCrop->harvest->harvest_date }}</p>
    <a href="{{ route('stored_crops.edit', $storedCrop->id) }}">Edit</a>
    <form action="{{ route('stored_crops.destroy', $storedCrop->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
