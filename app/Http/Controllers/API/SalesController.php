<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return response()->json(Sales::all());
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
        return response()->json(Sales::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Sales::findOrFail($id));
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
        return response()->json($sale);
    }

    public function destroy($id)
    {
        Sales::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
