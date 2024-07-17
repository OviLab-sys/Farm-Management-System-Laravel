@extends('layouts.app')

@section('content')
    <h1>Fertilizer Application Details</h1>
    <p>Stock ID: {{ $fertilizerApplication->stock_id }}</p>
    <p>Application Date: {{ $fertilizerApplication->application_date }}</p>
    <p>Quantity: {{ $fertilizerApplication->quantity }}</p>
    <a href="{{ route('fertilizer_applications.edit', $fertilizerApplication->id) }}">Edit</a>
    <form action="{{ route('fertilizer_applications.destroy', $fertilizerApplication->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
