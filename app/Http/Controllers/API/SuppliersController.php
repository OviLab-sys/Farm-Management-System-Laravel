<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        return response()->json(Suppliers::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone_number' => 'required|integer',
            'address' => 'required|string|max:100',
            'supplies_type' => 'required|string|max:100',
        ]);

        $supplier = Suppliers::create($request->all());
        return response()->json($supplier, 201);
    }

    public function show($id)
    {
        $supplier = Suppliers::findOrFail($id);
        return response()->json($supplier);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone_number' => 'required|integer',
            'address' => 'required|string|max:100',
            'supplies_type' => 'required|string|max:100',
        ]);

        $supplier = Suppliers::findOrFail($id);
        $supplier->update($request->all());
        return response()->json($supplier);
    }

    public function destroy($id)
    {
        Suppliers::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
