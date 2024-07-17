@extends('layouts.app')

@section('content')
    <h1>All Stored Crops</h1>
    <a href="{{ route('stored_crops.create') }}">Add New Stored Crop</a>
    <ul>
        @foreach($storedCrops as $storedCrop)
            <li>
                <a href="{{ route('stored_crops.show', $storedCrop->id) }}">
                    Crop: {{ $storedCrop->crop->name }} | Quantity: {{ $storedCrop->quantity }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
