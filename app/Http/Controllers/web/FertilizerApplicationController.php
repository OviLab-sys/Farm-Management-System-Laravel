<?php

namespace App\Http\Controllers;

use App\Models\FertilizerApplication;
use Illuminate\Http\Request;

class FertilizerApplicationController extends Controller
{
    public function index()
    {
        $fertilizerApplications = FertilizerApplication::all();
        return view('fertilizer_applications.index', compact('fertilizerApplications'));
    }

    public function create()
    {
        return view('fertilizer_applications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock_id' => 'required|integer',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        FertilizerApplication::create($request->all());
        return redirect()->route('fertilizer_applications.index');
    }

    public function show($id)
    {
        $fertilizerApplication = FertilizerApplication::findOrFail($id);
        return view('fertilizer_applications.show', compact('fertilizerApplication'));
    }

    public function edit($id)
    {
        $fertilizerApplication = FertilizerApplication::findOrFail($id);
        return view('fertilizer_applications.edit', compact('fertilizerApplication'));
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
        return redirect()->route('fertilizer_applications.index');
    }

    public function destroy($id)
    {
        FertilizerApplication::findOrFail($id)->delete();
        return redirect()->route('fertilizer_applications.index');
    }
}
