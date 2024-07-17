@extends('layouts.app')

@section('content')
    <h1>All Stocks</h1>
    <a href="{{ route('stocks.create') }}">Add New Stock</a>
    <ul>
        @foreach($stocks as $stock)
            <li>
                <a href="{{ route('stocks.show', $stock->id) }}">
                    {{ $stock->name }} - {{ $stock->quantity }} - {{ $stock->stock_type }} - {{ $stock->price }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
