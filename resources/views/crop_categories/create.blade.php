@extends('layouts.app')

@section('content')
    <h1>Add New Crop Category</h1>
    <form action="{{ route('crop_categories.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Add Crop Category</button>
    </form>
@endsection
