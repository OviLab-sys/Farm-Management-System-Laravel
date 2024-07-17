@extends('layouts.app')

@section('content')
    <h1>Edit Storage</h1>
    <form action="{{ route('storages.update', $storage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="location">Location:</label>
        <input type="text" name="location" value="{{ $storage->location }}" required>
        <label for="capacity">Capacity:</label>
        <input type="text" name="capacity" value="{{ $storage->capacity }}" required>
        <button type="submit">Update Storage</button>
    </form>
@endsection
