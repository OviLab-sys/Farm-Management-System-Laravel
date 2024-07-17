<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return response()->json(Customer::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:100',
            'phone_number' => 'required|integer',
            'email' => 'nullable|string|max:80',
            'address' => 'required|string|max:100',
        ]);
        return response()->json(Customer::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Customer::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:100',
            'phone_number' => 'required|integer',
            'email' => 'nullable|string|max:80',
            'address' => 'required|string|max:100',
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json($customer);
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}