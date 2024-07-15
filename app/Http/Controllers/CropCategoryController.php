<?php

namespace App\Http\Controllers;

use App\Models\CropCategory;
use Illuminate\Http\Request;

class CropCategoryController extends Controller
{
    public function index()
    {
        return response()->json(CropCategory::all());
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:100']);
        return response()->json(CropCategory::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(CropCategory::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:100']);
        $cropCategory = CropCategory::findOrFail($id);
        $cropCategory->update($request->all());
        return response()->json($cropCategory);
    }

    public function destroy($id)
    {
        CropCategory::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
