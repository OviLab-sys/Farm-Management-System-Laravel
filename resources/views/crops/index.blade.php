@extends('layouts.app')

@section('content')
    <h1>All Crops</h1>
    <a href="{{ route('crops.create') }}">Add New Crop</a>
    <ul>
        @foreach($crops as $crop)
            <li>
                <a href="{{ route('crops.show', $crop->id) }}">{{ $crop->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
