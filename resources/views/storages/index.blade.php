@extends('layouts.app')

@section('content')
    <h1>All Storages</h1>
    <a href="{{ route('storages.create') }}">Add New Storage</a>
    <ul>
        @foreach($storages as $storage)
            <li>
                <a href="{{ route('storages.show', $storage->id) }}">
                    {{ $storage->location }} - {{ $storage->capacity }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
