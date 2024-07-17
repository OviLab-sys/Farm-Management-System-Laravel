@extends('layouts.app')

@section('content')
    <h1>Edit Fertilizer Application</h1>
    <form action="{{ route('fertilizer_applications.update', $fertilizerApplication->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="stock_id">Stock ID:</label>
        <input type="number" name="stock_id" value="{{ $fertilizerApplication->stock_id }}" required>
        <label for="application_date">Application Date:</label>
        <input type="date" name="application_date" value="{{ $fertilizerApplication->application_date }}" required>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="{{ $fertilizerApplication->quantity }}" required>
        <button type="submit">Update Application</button>
    </form>
@endsection
