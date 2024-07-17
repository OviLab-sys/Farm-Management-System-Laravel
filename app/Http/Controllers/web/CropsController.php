<?php

namespace App\Http\Controllers\web;

use App\Models\Crop;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function index()
    {
        $crops = Crop::all();
        return view('crops.index', compact('crops'));
    }

    public function create()
    {
        return view('crops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'crop_categories_id' => 'required|integer',
            'planting_date' => 'required|date',
            'harvesting_date' => 'required|date',
        ]);

        Crop::create($request->all());
        return redirect()->route('crops.index');
    }

    public function show($id)
    {
        $crop = Crop::findOrFail($id);
        return view('crops.show', compact('crop'));
    }

    public function edit($id)
    {
        $crop = Crop::findOrFail($id);
        return view('crops.edit', compact('crop'));
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
        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        Crop::findOrFail($id)->delete();
        return redirect()->route('crops.index');
    }
}
