@extends('layouts.app')

@section('content')
    <h1>{{ $customer->full_name }}</h1>
    <p>Phone Number: {{ $customer->phone_number }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Address: {{ $customer->address }}</p>
    <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
