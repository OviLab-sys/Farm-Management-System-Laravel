<!-- resources/views/stored_crops/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Stored Crop</h1>
    <form action="{{ route('stored_crops.update', $storedCrop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="crops_id">Crop:</label>
        <select name="crops_id" id="crops_id" required>
            @foreach($crops as $crop)
                <option value="{{ $crop->id }}" {{ $crop->id == $storedCrop->crops_id ? 'selected' : '' }}>
                    {{ $crop->name }}
                </option>
            @endforeach
        </select>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $storedCrop->quantity }}" required>
        <label for="storage_date">Storage Date:</label>
        <input type="date" name="storage_date" value="{{ $storedCrop->storage_date }}">
        <label for="storage_id">Storage:</label>
        <select name="storage_id" id="storage_id" required>
            @foreach($storages as $storage)
                <option value="{{ $storage->id }}" {{ $storage->id == $storedCrop->storage_id ? 'selected' : '' }}>
                    {{ $storage->location }}
                </option>
            @endforeach
        </select>
        <label for="harvest_id">Harvest:</label>
        <select name="harvest_id" id="harvest_id" required>
            @foreach($harvests as $harvest)
                <option value="{{ $harvest->id }}" {{ $harvest->id == $storedCrop->harvest_id ? 'selected' : '' }}>
                    {{ $harvest->harvest_date }}
                </option>
            @endforeach
        </select>
        <button type="submit">Update Stored Crop</button>
    </form>
@endsection
