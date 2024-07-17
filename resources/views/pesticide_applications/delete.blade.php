@extends('layouts.app')

@section('content')
    <h1>Pesticide Application Details</h1>
    <p>Crop ID: {{ $pesticideApplication->crop_id }}</p>
    <p>Pesticide Name: {{ $pesticideApplication->pesticide_name }}</p>
    <p>Application Date: {{ $pesticideApplication->application_date }}</p>
    <p>Quantity: {{ $pesticideApplication->quantity }}</p>
    <a href="{{ route('pesticide_applications.edit', $pesticideApplication->id) }}">Edit</a>
    <form action="{{ route('pesticide_applications.destroy', $pesticideApplication->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
