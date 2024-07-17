<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return response()->json(Stock::all());
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
        return response()->json($stock, 201);
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);
        return response()->json($stock);
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
        return response()->json($stock);
    }

    public function destroy($id)
    {
        Stock::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
