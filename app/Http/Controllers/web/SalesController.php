<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stored_crops_id' => 'required|integer',
            'sales_date' => 'required|date',
            'quantity' => 'required|string',
            'price_per_unit' => 'required|integer',
            'total_price' => 'nullable|integer',
            'customer_id' => 'required|integer',
        ]);
        Sales::create($request->all());
        return redirect()->route('sales.index');
    }

    public function show($id)
    {
        $sale = Sales::findOrFail($id);
        return view('sales.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Sales::findOrFail($id);
        return view('sales.edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'stored_crops_id' => 'required|integer',
            'sales_date' => 'required|date',
            'quantity' => 'required|string',
            'price_per_unit' => 'required|integer',
            'total_price' => 'nullable|integer',
            'customer_id' => 'required|integer',
        ]);
        $sale = Sales::findOrFail($id);
        $sale->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy($id)
    {
        Sales::findOrFail($id)->delete();
        return redirect()->route('sales.index');
    }
}
