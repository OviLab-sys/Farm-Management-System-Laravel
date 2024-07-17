<?php

namespace App\Http\Controllers;

use App\Models\StoredCrops;
use Illuminate\Http\Request;

class StoredCropsController extends Controller
{
    public function index()
    {
        return response()->json(StoredCrops::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'crops_id' => 'required|integer|exists:crops,id',
            'quantity' => 'required|string|max:90',
            'storage_date' => 'nullable|date',
            'storage_id' => 'required|integer|exists:storage,id',
            'harvest_id' => 'required|integer|exists:harvests,id',
        ]);

        $storedCrops = StoredCrops::create($request->all());
        return response()->json($storedCrops, 201);
    }

    public function show($id)
    {
        $storedCrops = StoredCrops::findOrFail($id);
        return response()->json($storedCrops);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'crops_id' => 'required|integer|exists:crops,id',
            'quantity' => 'required|string|max:90',
            'storage_date' => 'nullable|date',
            'storage_id' => 'required|integer|exists:storage,id',
            'harvest_id' => 'required|integer|exists:harvests,id',
        ]);

        $storedCrops = StoredCrops::findOrFail($id);
        $storedCrops->update($request->all());
        return response()->json($storedCrops);
    }

    public function destroy($id)
    {
        StoredCrops::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

