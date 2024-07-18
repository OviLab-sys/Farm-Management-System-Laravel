<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'quantity' => 'required|string|max:90',
            'stock_type' => 'required|string|max:100',
            'price' => 'required|integer',
            'supplier_id' => 'required|integer|exists:suppliers,id',
        ]);

        $stock = Stock::create($request->all());
        return redirect()->route('stocks.index')->with('success', 'Stock created successfully.');
    }

    public function delete($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.delete', compact('stock'));
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'quantity' => 'required|string|max:90',
            'stock_type' => 'required|string|max:100',
            'price' => 'required|integer',
            'supplier_id' => 'required|integer|exists:suppliers,id',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($request->all());
        return redirect()->route('stocks.index')->with('success', 'Stock updated successfully.');
    }

    public function destroy($id)
    {
        Stock::findOrFail($id)->delete();
        return redirect()->route('stocks.index')->with('success', 'Stock deleted successfully.');
    }
}
