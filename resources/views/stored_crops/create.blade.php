@extends('layouts.app')

@section('content')
    <h1>Add New Stored Crop</h1>
    <form action="{{ route('stored_crops.store') }}" method="POST">
        @csrf
        <label for="crops_id">Crop:</label>
        <select name="crops_id" id="crops_id" required>
            @foreach($crops as $crop)
                <option value="{{ $crop->id }}">{{ $crop->name }}</option>
            @endforeach
        </select>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" required>
        <label for="storage_date">Storage Date:</label>
        <input type="date" name="storage_date">
        <label for="storage_id">Storage:</label>
        <select name="storage_id" id="storage_id" required>
            @foreach($storages as $storage)
                <option value="{{ $storage->id }}">{{ $storage->location }}</option>
            @endforeach
        </select>
        <label for="harvest_id">Harvest:</label>
        <select name="harvest_id" id="harvest_id" required>
            @foreach($harvests as $harvest)
                <option value="{{ $harvest->id }}">{{ $harvest->harvest_date }}</option>
            @endforeach
        </select>
        <button type="submit">Add Stored Crop</button>
    </form>
@endsection
