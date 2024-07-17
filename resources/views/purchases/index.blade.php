@extends('layouts.app')

@section('content')
    <h1>All Purchases</h1>
    <a href="{{ route('purchases.create') }}">Add New Purchase</a>
    <ul>
        @foreach($purchases as $purchase)
            <li>
                <a href="{{ route('purchases.show', $purchase->id) }}">
                    {{ $purchase->purchase_date }} - {{ $purchase->total_cost }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
