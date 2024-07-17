@extends('layouts.app')

@section('content')
    <h1>Add New Storage</h1>
    <form action="{{ route('storages.store') }}" method="POST">
        @csrf
        <label for="location">Location:</label>
        <input type="text" name="location" required>
        <label for="capacity">Capacity:</label>
        <input type="text" name="capacity" required>
        <button type="submit">Add Storage</button>
    </form>
@endsection
