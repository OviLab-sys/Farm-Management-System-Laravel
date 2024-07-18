<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        return view('storages.index', compact('storages'));
    }

    public function create()
    {
        return view('storages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
            'capacity' => 'required|string|max:100',
        ]);

        $storage = Storage::create($request->all());
        return redirect()->route('storages.index')->with('success', 'Storage created successfully.');
    }

    public function delete($id)
    {
        $storage = Storage::findOrFail($id);
        return view('storages.delete', compact('storage'));
    }

    public function edit($id)
    {
        $storage = Storage::findOrFail($id);
        return view('storages.edit', compact('storage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'required|string',
            'capacity' => 'required|string|max:100',
        ]);

        $storage = Storage::findOrFail($id);
        $storage->update($request->all());
        return redirect()->route('storages.index')->with('success', 'Storage updated successfully.');
    }

    public function destroy($id)
    {
        Storage::findOrFail($id)->delete();
        return redirect()->route('storages.index')->with('success', 'Storage deleted successfully.');
    }
}
