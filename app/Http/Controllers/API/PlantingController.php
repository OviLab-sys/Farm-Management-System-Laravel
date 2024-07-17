<?php

namespace App\Http\Controllers;

use App\Models\Planting;
use Illuminate\Http\Request;

class PlantingController extends Controller
{
    public function index()
    {
        return response()->json(Planting::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'crops_id' => 'required|integer',
            'planting_date' => 'required|date',
            'expected_harvest_date' => 'required|date',
            'quantity_planted' => 'required|string|max:90',
        ]);
        return response()->json(Planting::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Planting::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'crops_id' => 'required|integer',
            'planting_date' => 'required|date',
            'expected_harvest_date' => 'required|date',
            'quantity_planted' => 'required|string|max:90',
        ]);
        $planting = Planting::findOrFail($id);
        $planting->update($request->all());
        return response()->json($planting);
    }

    public function destroy($id)
    {
        Planting::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}