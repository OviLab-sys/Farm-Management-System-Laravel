<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        return response()->json(Storage::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
            'capacity' => 'required|string|max:100',
        ]);

        $storage = Storage::create($request->all());
        return response()->json($storage, 201);
    }

    public function show($id)
    {
        $storage = Storage::findOrFail($id);
        return response()->json($storage);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'required|string',
            'capacity' => 'required|string|max:100',
        ]);

        $storage = Storage::findOrFail($id);
        $storage->update($request->all());
        return response()->json($storage);
    }

    public function destroy($id)
    {
        Storage::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
