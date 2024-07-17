@extends('layouts.app')

@section('content')
    <h1>All Pesticide Applications</h1>
    <a href="{{ route('pesticide_applications.create') }}">Add New Pesticide Application</a>
    <ul>
        @foreach($pesticideApplications as $pesticideApplication)
            <li>
                <a href="{{ route('pesticide_applications.show', $pesticideApplication->id) }}">
                    {{ $pesticideApplication->application_date }} - {{ $pesticideApplication->pesticide_name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
