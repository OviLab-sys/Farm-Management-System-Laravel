<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index()
    {
        return response()->json(Revenue::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'sale_id' => 'required|integer',
            'amount' => 'required|integer',
            'revenue_date' => 'required|date',
        ]);
        return response()->json(Revenue::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Revenue::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sale_id' => 'required|integer',
            'amount' => 'required|integer',
            'revenue_date' => 'required|date',
        ]);
        $revenue = Revenue::findOrFail($id);
        $revenue->update($request->all());
        return response()->json($revenue);
    }

    public function destroy($id)
    {
        Revenue::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
