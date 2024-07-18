<?php

namespace App\Http\Controllers;

use App\Models\CropCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CropCategoryController extends Controller
{
    public function index()
    {
        $cropCategories = CropCategory::all();
        return view('crop_categories.index', compact('cropCategories'));
    }

    public function create()
    {
        return view('crop_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:100']);
        CropCategory::create($request->all());
        return redirect()->route('crop_categories.index');
    }

    public function show($id)
    {
        $cropCategory = CropCategory::findOrFail($id);
        return view('crop_categories.show', compact('cropCategory'));
    }

    public function edit($id)
    {
        $cropCategory = CropCategory::findOrFail($id);
        return view('crop_categories.edit', compact('cropCategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:100']);
        $cropCategory = CropCategory::findOrFail($id);
        $cropCategory->update($request->all());
        return redirect()->route('crop_categories.index');
    }

    public function destroy($id)
    {
        CropCategory::findOrFail($id)->delete();
        return redirect()->route('crop_categories.index');
    }
}
