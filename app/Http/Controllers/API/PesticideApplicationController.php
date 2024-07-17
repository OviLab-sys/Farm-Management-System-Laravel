<?php

namespace App\Http\Controllers;

use App\Models\PesticideApplication;
use Illuminate\Http\Request;

class PesticideApplicationController extends Controller
{
    public function index()
    {
        return response()->json(PesticideApplication::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'pesticide_name' => 'required|string|max:100',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        return response()->json(PesticideApplication::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(PesticideApplication::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'pesticide_name' => 'required|string|max:100',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        $pesticideApplication = PesticideApplication::findOrFail($id);
        $pesticideApplication->update($request->all());
        return response()->json($pesticideApplication);
    }

    public function destroy($id)
    {
        PesticideApplication::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
