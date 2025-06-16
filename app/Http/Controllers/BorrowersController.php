<?php

namespace App\Http\Controllers;

use App\Models\Borrowers;
use Illuminate\Http\Request;

class BorrowersController extends Controller
{
    public function index()
    {
        $borrowers = Borrowers::all();
        return view('borrowers.index', compact('borrowers'));
    }

    public function create()
    {
        return view('borrowers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'amount_borrowed' => 'required|numeric',
            'due_date' => 'required',
        ]);

        $validated['date_borrowed'] = now();
        $validated['balance'] = $validated['amount_borrowed'];
        $validated['status'] = 'unpaid';

        Borrowers::create($validated);

        return redirect()->route('borrowers.index')->with('success', 'Borrower created successfully');
    }

    public function show(Borrowers $borrower)
    {
        $payments = $borrower->payments()->orderBy('date', 'desc')->get();
        return view('borrowers.show', compact('borrower', 'payments'));
    }

    public function edit(Borrowers $borrower)
    {
        return view('borrowers.edit', compact('borrower'));
    }

    public function update(Request $request, Borrowers $borrower)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'amount_borrowed' => 'required|numeric',
            'due_date' => 'required',
        ]);

        $original_amount_borrowed = $borrower->amount_borrowed;
        $updated_amount_borrowed = $validated['amount_borrowed'];

        $borrower->balance += $updated_amount_borrowed - $original_amount_borrowed;

        $borrower->fill($validated);
        $borrower->save();

        return to_route('borrowers.index')->with('success', 'Borrower updated successfully');
    }

    public function destroy(Borrowers $borrower)
    {
        $borrower->delete();
        return to_route('borrowers.index')->with('success', 'Borrower deleted successfully');
    }
}
