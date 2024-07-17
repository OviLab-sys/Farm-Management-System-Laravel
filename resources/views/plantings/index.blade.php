@extends('layouts.app')

@section('content')
    <h1>All Plantings</h1>
    <a href="{{ route('plantings.create') }}">Add New Planting</a>
    <ul>
        @foreach($plantings as $planting)
            <li>
                <a href="{{ route('plantings.show', $planting->id) }}">
                    {{ $planting->planting_date }} - {{ $planting->quantity_planted }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
