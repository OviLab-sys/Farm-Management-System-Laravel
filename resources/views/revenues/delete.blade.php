@extends('layouts.app')

@section('content')
    <h1>Revenue Details</h1>
    <p>Sale ID: {{ $revenue->sale_id }}</p>
    <p>Amount: {{ $revenue->amount }}</p>
    <p>Revenue Date: {{ $revenue->revenue_date }}</p>
    <a href="{{ route('revenues.edit', $revenue->id) }}">Edit</a>
    <form action="{{ route('revenues.destroy', $revenue->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
