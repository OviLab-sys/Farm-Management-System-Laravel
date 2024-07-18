<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|integer',
            'expense_date' => 'required|date',
            'expense_category' => 'required|string',
        ]);
        Expense::create($request->all());
        return redirect()->route('expenses.index');
    }

    public function delete($id)
    {
        $expense = Expense::findOrFail($id);
        return view('expenses.delete', compact('expense'));
    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        return view('expenses.edit', compact('expense'));
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
        return redirect()->route('expenses.index');
    }

    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
        return redirect()->route('expenses.index');
    }
}
