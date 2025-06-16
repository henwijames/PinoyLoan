<x-layouts.auth>
  <x-slot:title>Borrower Information | PinoyLoan</x-slot:title>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex items-center justify-between gap-2">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-user text-2xl"></i>
        <h1 class="text-2xl font-bold"><span class="font-normal">{{ $borrower->first_name }} {{ $borrower->middle_name }}
            {{ $borrower->last_name }}</span></h1>
      </div>
      <a href="{{ route('borrowers.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="mt-6 space-y-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4 w-full">
        <div>
          <h2 class="text-lg font-bold">Address</h2>
          <p>{{ $borrower->address }}</p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Contact Number</h2>
          <p>{{ $borrower->contact_number }}</p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Amount Borrowed</h2>
          <p>₱{{ number_format($borrower->amount_borrowed, 2) }}</p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Balance</h2>
          <p>₱{{ number_format($borrower->balance, 2) }}</p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Status</h2>
          <p class="badge {{ $borrower->status === 'unpaid' ? 'badge-error text-white' : 'badge-success' }} capitalize">
            {{ $borrower->status }}
          </p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Date Borrowed</h2>
          <p>{{ $borrower->date_borrowed }}</p>
        </div>
        <div>
          <h2 class="text-lg font-bold">Due Date</h2>
          <p>{{ $borrower->due_date }}</p>
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between gap-2">
          <h2 class="text-lg font-bold">Payments</h2>
          <a href="{{ route('payments.create', $borrower->id) }}" class="btn btn-primary">Add Payment</a>
        </div>
        <div class="overflow-x-auto">
          <table class="table table-zebra">
            <thead>
              <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($payments as $payment)
                <tr>
                  <td>{{ $payment->date }}</td>
                  <td>₱{{ number_format($payment->amount, 2) }}</td>
                  <td>
                    <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-sm btn-info">View</a>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3" class="text-center">No payments yet</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-layouts.auth>
