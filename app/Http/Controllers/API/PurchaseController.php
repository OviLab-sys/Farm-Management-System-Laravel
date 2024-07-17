<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return response()->json(Purchase::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock_type' => 'required|string|max:100',
            'supplier_id' => 'required|integer',
            'purchase_date' => 'required|date',
            'quantity' => 'required|string|max:90',
            'total_cost' => 'required|integer',
        ]);
        return response()->json(Purchase::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Purchase::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'stock_type' => 'required|string|max:100',
            'supplier_id' => 'required|integer',
            'purchase_date' => 'required|date',
            'quantity' => 'required|string|max:90',
            'total_cost' => 'required|integer',
        ]);
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());
        return response()->json($purchase);
    }

    public function destroy($id)
    {
        Purchase::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
