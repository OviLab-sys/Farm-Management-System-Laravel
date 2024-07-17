@extends('layouts.app')

@section('content')
    <h1>All Fertilizer Applications</h1>
    <a href="{{ route('fertilizer_applications.create') }}">Add New Application</a>
    <ul>
        @foreach($fertilizerApplications as $fertilizerApplication)
            <li>
                <a href="{{ route('fertilizer_applications.show', $fertilizerApplication->id) }}">
                    {{ $fertilizerApplication->application_date }} - {{ $fertilizerApplication->quantity }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
