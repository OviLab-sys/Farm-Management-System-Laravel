<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        return response()->json(Crop::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'crop_categories_id' => 'required|integer',
            'planting_date' => 'required|date',
            'harvesting_date' => 'required|date',
        ]);
        return response()->json(Crop::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Crop::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'crop_categories_id' => 'required|integer',
            'planting_date' => 'required|date',
            'harvesting_date' => 'required|date',
        ]);
        $crop = Crop::findOrFail($id);
        $crop->update($request->all());
        return response()->json($crop);
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
