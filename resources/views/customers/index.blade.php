@extends('layouts.app')

@section('content')
    <h1>All Customers</h1>
    <a href="{{ route('customers.create') }}">Add New Customer</a>
    <ul>
        @foreach($customers as $customer)
            <li>
                <a href="{{ route('customers.show', $customer->id) }}">{{ $customer->full_name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
