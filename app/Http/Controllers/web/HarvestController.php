<?php

namespace App\Http\Controllers;

use App\Models\Harvest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HarvestController extends Controller
{
    public function index()
    {
        $harvests = Harvest::all();
        return view('harvests.index', compact('harvests'));
    }

    public function create()
    {
        return view('harvests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'harvest_date' => 'required|date',
            'quantity' => 'nullable|string|max:90',
            'quality' => 'required|string|max:90',
        ]);
        Harvest::create($request->all());
        return redirect()->route('harvests.index');
    }

    public function delete($id)
    {
        $harvest = Harvest::findOrFail($id);
        return view('harvests.delete', compact('harvest'));
    }

    public function edit($id)
    {
        $harvest = Harvest::findOrFail($id);
        return view('harvests.edit', compact('harvest'));
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
        return redirect()->route('harvests.index');
    }

    public function destroy($id)
    {
        Harvest::findOrFail($id)->delete();
        return redirect()->route('harvests.index');
    }
}
