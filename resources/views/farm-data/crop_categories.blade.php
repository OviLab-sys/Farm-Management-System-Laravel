@extends('layouts.app')

@section('content')
    <h1>All Crop Categories</h1>
    <a href="{{ route('crop_categories.create') }}">Add New Crop Category</a>
    <ul>
        @foreach($cropCategories as $cropCategory)
            <li>
                <a href="{{ route('crop_categories.show', $cropCategory->id) }}">{{ $cropCategory->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection