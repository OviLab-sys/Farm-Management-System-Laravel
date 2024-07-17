<?php

namespace App\Http\Controllers;

use App\Models\Planting;
use Illuminate\Http\Request;

class PlantingController extends Controller
{
    public function index()
    {
        $plantings = Planting::all();
        return view('plantings.index', compact('plantings'));
    }

    public function create()
    {
        return view('plantings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'crops_id' => 'required|integer',
            'planting_date' => 'required|date',
            'expected_harvest_date' => 'required|date',
            'quantity_planted' => 'required|string|max:90',
        ]);
        Planting::create($request->all());
        return redirect()->route('plantings.index');
    }

    public function show($id)
    {
        $planting = Planting::findOrFail($id);
        return view('plantings.show', compact('planting'));
    }

    public function edit($id)
    {
        $planting = Planting::findOrFail($id);
        return view('plantings.edit', compact('planting'));
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
        return redirect()->route('plantings.index');
    }

    public function destroy($id)
    {
        Planting::findOrFail($id)->delete();
        return redirect()->route('plantings.index');
    }
}
