@extends('layouts.app')

@section('content')
    <h1>All Suppliers</h1>
    <a href="{{ route('suppliers.create') }}">Add New Supplier</a>
    <ul>
        @foreach($suppliers as $supplier)
            <li>
                <a href="{{ route('suppliers.show', $supplier->id) }}">
                    {{ $supplier->name }} | {{ $supplier->supplies_type }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
