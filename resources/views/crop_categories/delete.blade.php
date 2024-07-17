@extends('layouts.app')

@section('content')
    <h1>{{ $cropCategory->name }}</h1>
    <a href="{{ route('crop_categories.edit', $cropCategory->id) }}">Edit</a>
    <form action="{{ route('crop_categories.destroy', $cropCategory->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
