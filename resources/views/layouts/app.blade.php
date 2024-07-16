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
                <li><a href="{{ route('crop-categories.index') }}">Crop Categories</a></li>
                <li><a href="{{ route('crops.index') }}">Crops</a></li>
                <li><a href="{{ route('customers.index') }}">Customers</a></li>
                <li><a href="{{ route('expenses.index') }}">Expenses</a></li>
                <li><a href="{{ route('fertilizer-applications.index') }}">Fertilizer Applications</a></li>
                <li><a href="{{ route('harvests.index') }}">Harvests</a></li>
                <li><a href="{{ route('pesticide-applications.index') }}">Pesticide Applications</a></li>
                <li><a href="{{ route('plantings.index') }}">Plantings</a></li>
                <li><a href="{{ route('purchases.index') }}">Purchases</a></li>
                <li><a href="{{ route('revenue.index') }}">Revenue</a></li>
                <li><a href="{{ route('sales.index') }}">Sales</a></li>
                <li><a href="{{ route('stock.index') }}">Stock</a></li>
                <li><a href="{{ route('storage.index') }}">Storage</a></li>
                <li><a href="{{ route('stored-crops.index') }}">Stored Crops</a></li>
                <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
            </ul>
        </nav>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Farm Management System</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
