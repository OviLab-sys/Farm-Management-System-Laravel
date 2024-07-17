<?php

namespace App\Http\Controllers;

use App\Models\FertilizerApplication;
use Illuminate\Http\Request;

class FertilizerApplicationController extends Controller
{
    public function index()
    {
        return response()->json(FertilizerApplication::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock_id' => 'required|integer',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        return response()->json(FertilizerApplication::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(FertilizerApplication::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'stock_id' => 'required|integer',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        $fertilizerApplication = FertilizerApplication::findOrFail($id);
        $fertilizerApplication->update($request->all());
        return response()->json($fertilizerApplication);
    }

    public function destroy($id)
    {
        FertilizerApplication::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}