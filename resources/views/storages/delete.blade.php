@extends('layouts.app')

@section('content')
    <h1>Storage Details</h1>
    <p>Location: {{ $storage->location }}</p>
    <p>Capacity: {{ $storage->capacity }}</p>
    <a href="{{ route('storages.edit', $storage->id) }}">Edit</a>
    <form action="{{ route('storages.destroy', $storage->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
