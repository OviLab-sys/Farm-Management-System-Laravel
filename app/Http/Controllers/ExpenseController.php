<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return response()->json(Expense::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|integer',
            'expense_date' => 'required|date',
            'expense_category' => 'required|string',
        ]);
        return response()->json(Expense::create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json(Expense::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|integer',
            'expense_date' => 'required|date',
            'expense_category' => 'required|string',
        ]);
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());
        return response()->json($expense);
    }

    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}