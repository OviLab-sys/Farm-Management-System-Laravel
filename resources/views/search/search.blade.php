<!DOCTYPE html>
<html>
@extends('home')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @foreach($results as $key => $items)
        <h2>{{ ucfirst($key) }}</h2>
        @if($items->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
@endsection
