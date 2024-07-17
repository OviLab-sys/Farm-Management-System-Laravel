@extends('layouts.app')

@section('content')
    <h1>All Sales</h1>
    <a href="{{ route('sales.create') }}">Add New Sale</a>
    <ul>
        @foreach($sales as $sale)
            <li>
                <a href="{{ route('sales.show', $sale->id) }}">
                    {{ $sale->sales_date }} - {{ $sale->quantity }} - {{ $sale->total_price }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
