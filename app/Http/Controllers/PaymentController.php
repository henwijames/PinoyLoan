<?php

namespace App\Http\Controllers;

use App\Models\Borrowers;
use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Borrowers $borrower)
    {
        return view('payments.create', compact('borrower'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Borrowers $borrower)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        if ($validated['amount'] > $borrower->balance) {
            return redirect()->back()->with('error', 'Amount is greater than balance');
        }

        $validated['date'] = now();

        $borrower->payments()->create($validated);

        $borrower->balance -= $validated['amount'];
        $borrower->status = 'partially paid';

        if ($borrower->balance == 0) {
            $borrower->status = 'fully paid';
        }

        $borrower->amount_paid += $validated['amount'];

        $borrower->save();

        return redirect()->route('borrowers.show', $borrower->id)->with('success', 'Payment created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowers $borrower, Payments $payment)
    {
        return view('payments.show', compact('borrower', 'payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
