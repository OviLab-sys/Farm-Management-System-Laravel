<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:100',
            'phone_number' => 'required|integer',
            'email' => 'nullable|string|max:80',
            'address' => 'required|string|max:100',
        ]);
        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.delete', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
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
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return redirect()->route('customers.index');
    }
}
