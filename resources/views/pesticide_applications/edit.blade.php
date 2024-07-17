@extends('layouts.app')

@section('content')
    <h1>Edit Pesticide Application</h1>
    <form action="{{ route('pesticide_applications.update', $pesticideApplication->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="crop_id">Crop ID:</label>
        <input type="number" name="crop_id" value="{{ $pesticideApplication->crop_id }}" required>
        <label for="pesticide_name">Pesticide Name:</label>
        <input type="text" name="pesticide_name" value="{{ $pesticideApplication->pesticide_name }}" required>
        <label for="application_date">Application Date:</label>
        <input type="date" name="application_date" value="{{ $pesticideApplication->application_date }}" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $pesticideApplication->quantity }}" required>
        <button type="submit">Update Pesticide Application</button>
    </form>
@endsection
