@extends('layouts.app')

@section('content')
    <h1>All Harvests</h1>
    <a href="{{ route('harvests.create') }}">Add New Harvest</a>
    <ul>
        @foreach($harvests as $harvest)
            <li>
                <a href="{{ route('harvests.show', $harvest->id) }}">
                    {{ $harvest->harvest_date }} - {{ $harvest->quality }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
