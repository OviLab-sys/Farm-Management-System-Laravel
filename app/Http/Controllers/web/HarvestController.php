<?php

namespace App\Http\Controllers;

use App\Models\Harvest;
use Illuminate\Http\Request;

class HarvestController extends Controller
{
    public function index()
    {
        return response()->json(Harvest::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'harvest_date' => 'required|date',
            'quantity' => 'nullable|string|max:90',
            'quality' => 'required|string|max:90',
        ]);
        return response()->json(Harvest::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Harvest::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'harvest_date' => 'required|date',
            'quantity' => 'nullable|string|max:90',
            'quality' => 'required|string|max:90',
        ]);
        $harvest = Harvest::findOrFail($id);
        $harvest->update($request->all());
        return response()->json($harvest);
    }

    public function destroy($id)
    {
        Harvest::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}