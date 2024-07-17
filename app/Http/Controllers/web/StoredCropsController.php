<?php

namespace App\Http\Controllers;

use App\Models\StoredCrops;
use App\Models\Crop;
use App\Models\Storage;
use App\Models\Harvest;
use Illuminate\Http\Request;

class StoredCropsController extends Controller
{
    public function index()
    {
        $storedCrops = StoredCrops::all();
        return view('stored_crops.index', compact('storedCrops'));
    }

    public function create()
    {
        $crops = Crop::all();
        $storages = Storage::all();
        $harvests = Harvest::all();
        return view('stored_crops.create', compact('crops', 'storages', 'harvests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'crops_id' => 'required|integer|exists:crops,id',
            'quantity' => 'required|string|max:90',
            'storage_date' => 'nullable|date',
            'storage_id' => 'required|integer|exists:storages,id',
            'harvest_id' => 'required|integer|exists:harvests,id',
        ]);

        StoredCrops::create($request->all());
        return redirect()->route('stored_crops.index')->with('success', 'Stored Crop added successfully.');
    }

    public function delete($id)
    {
        $storedCrop = StoredCrops::findOrFail($id);
        return view('stored_crops.delete', compact('storedCrop'));
    }

    public function edit($id)
    {
        $storedCrop = StoredCrops::findOrFail($id);
        $crops = Crop::all();
        $storages = Storage::all();
        $harvests = Harvest::all();
        return view('stored_crops.edit', compact('storedCrop', 'crops', 'storages', 'harvests'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'crops_id' => 'required|integer|exists:crops,id',
            'quantity' => 'required|string|max:90',
            'storage_date' => 'nullable|date',
            'storage_id' => 'required|integer|exists:storages,id',
            'harvest_id' => 'required|integer|exists:harvests,id',
        ]);

        $storedCrop = StoredCrops::findOrFail($id);
        $storedCrop->update($request->all());
        return redirect()->route('stored_crops.index')->with('success', 'Stored Crop updated successfully.');
    }

    public function destroy($id)
    {
        StoredCrops::findOrFail($id)->delete();
        return redirect()->route('stored_crops.index')->with('success', 'Stored Crop deleted successfully.');
    }
}
