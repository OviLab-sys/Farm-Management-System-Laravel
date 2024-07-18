<?php

namespace App\Http\Controllers;

use App\Models\PesticideApplication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesticideApplicationController extends Controller
{
    public function index()
    {
        $pesticideApplications = PesticideApplication::all();
        return view('pesticide_applications.index', compact('pesticideApplications'));
    }

    public function create()
    {
        return view('pesticide_applications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'crop_id' => 'required|integer',
            'pesticide_name' => 'required|string|max:100',
            'application_date' => 'required|date',
            'quantity' => 'required|string|max:90',
        ]);
        PesticideApplication::create($request->all());
        return redirect()->route('pesticide_applications.index');
    }

    public function show($id)
    {
        $pesticideApplication = PesticideApplication::findOrFail($id);
        return view('pesticide_applications.show', compact('pesticideApplication'));
    }

    public function edit($id)
    {
        $pesticideApplication = PesticideApplication::findOrFail($id);
        return view('pesticide_applications.edit', compact('pesticideApplication'));
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
        return redirect()->route('pesticide_applications.index');
    }

    public function destroy($id)
    {
        PesticideApplication::findOrFail($id)->delete();
        return redirect()->route('pesticide_applications.index');
    }
}
