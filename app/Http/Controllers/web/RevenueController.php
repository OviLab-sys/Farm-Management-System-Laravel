<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index()
    {
        $revenues = Revenue::all();
        return view('revenues.index', compact('revenues'));
    }

    public function create()
    {
        return view('revenues.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sale_id' => 'required|integer',
            'amount' => 'required|integer',
            'revenue_date' => 'required|date',
        ]);
        Revenue::create($request->all());
        return redirect()->route('revenues.index');
    }

    public function show($id)
    {
        $revenue = Revenue::findOrFail($id);
        return view('revenues.show', compact('revenue'));
    }

    public function edit($id)
    {
        $revenue = Revenue::findOrFail($id);
        return view('revenues.edit', compact('revenue'));
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
        return redirect()->route('revenues.index');
    }

    public function destroy($id)
    {
        Revenue::findOrFail($id)->delete();
        return redirect()->route('revenues.index');
    }
}
