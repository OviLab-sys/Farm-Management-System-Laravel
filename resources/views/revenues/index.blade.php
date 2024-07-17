@extends('layouts.app')

@section('content')
    <h1>All Revenues</h1>
    <a href="{{ route('revenues.create') }}">Add New Revenue</a>
    <ul>
        @foreach($revenues as $revenue)
            <li>
                <a href="{{ route('revenues.show', $revenue->id) }}">
                    {{ $revenue->revenue_date }} - {{ $revenue->amount }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
