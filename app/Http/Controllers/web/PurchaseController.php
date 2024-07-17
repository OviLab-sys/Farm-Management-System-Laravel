<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        return view('purchases.create');
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
        Purchase::create($request->all());
        return redirect()->route('purchases.index');
    }

    public function delete($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.delete', compact('purchase'));
    }

    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.edit', compact('purchase'));
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
        return redirect()->route('purchases.index');
    }

    public function destroy($id)
    {
        Purchase::findOrFail($id)->delete();
        return redirect()->route('purchases.index');
    }
}
