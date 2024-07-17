@extends('layouts.app')

@section('content')
    <h1>{{ $crop->name }}</h1>
    <p>Category ID: {{ $crop->crop_categories_id }}</p>
    <p>Planting Date: {{ $crop->planting_date }}</p>
    <p>Harvesting Date: {{ $crop->harvesting_date }}</p>
    <a href="{{ route('crops.edit', $crop->id) }}">Edit</a>
    <form action="{{ route('crops.destroy', $crop->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
