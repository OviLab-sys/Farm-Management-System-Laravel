@extends('layouts.app')

@section('content')
    <h1>Edit Revenue</h1>
    <form action="{{ route('revenues.update', $revenue->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="sale_id">Sale ID:</label>
        <input type="number" name="sale_id" value="{{ $revenue->sale_id }}" required>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" value="{{ $revenue->amount }}" required>
        <label for="revenue_date">Revenue Date:</label>
        <input type="date" name="revenue_date" value="{{ $revenue->revenue_date }}" required>
        <button type="submit">Update Revenue</button>
    </form>
@endsection
