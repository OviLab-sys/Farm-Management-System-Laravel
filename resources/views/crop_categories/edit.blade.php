@extends('layouts.app')

@section('content')
    <h1>Edit Crop Category</h1>
    <form action="{{ route('crop_categories.update', $cropCategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $cropCategory->name }}" required>
        <button type="submit">Update Crop Category</button>
    </form>
@endsection
