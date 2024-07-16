<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('crop-categories') }}">Crop Categories</a></li>
                <li><a href="{{ route('crops') }}">Crops</a></li>
                <li><a href="{{ route('customers') }}">Customers</a></li>
                <li><a href="{{ route('expenses') }}">Expenses</a></li>
                <li><a href="{{ route('fertilizer-applications') }}">Fertilizer Applications</a></li>
                <li><a href="{{ route('harvests') }}">Harvests</a></li>
                <li><a href="{{ route('pesticide-applications') }}">Pesticide Applications</a></li>
                <li><a href="{{ route('plantings') }}">Plantings</a></li>
                <li><a href="{{ route('purchases') }}">Purchases</a></li>
                <li><a href="{{ route('revenue') }}">Revenue</a></li>
                <li><a href="{{ route('sales') }}">Sales</a></li>
                <li><a href="{{ route('stock') }}">Stock</a></li>
                <li><a href="{{ route('storage') }}">Storage</a></li>
                <li><a href="{{ route('stored-crops') }}">Stored Crops</a></li>
                <li><a href="{{ route('suppliers') }}">Suppliers</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
