<x-layouts.auth>
  <x-slot:title>Payment Details | PinoyLoan</x-slot:title>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex items-center justify-between gap-2">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-money-bill text-2xl"></i>
        <h1 class="text-2xl font-bold">Payment Details</h1>
      </div>
      <a href="{{ route('borrowers.show', $borrower->id) }}" class="btn btn-primary">Back to Borrower</a>
    </div>

    <div class="mt-6 space-y-4">
      <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Payment Information</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <p class="text-sm text-gray-500">Amount</p>
              <p class="text-lg font-semibold">₱{{ number_format($payment->amount, 2) }}</p>
            </div>
            <div>
              <p class="text-sm text-gray-500">Date</p>
              <p class="text-lg font-semibold">{{ $payment->date->format('F j, Y') }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Borrower Information</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <p class="text-sm text-gray-500">Name</p>
              <p class="text-lg font-semibold">{{ $borrower->first_name }} {{ $borrower->middle_name }}
                {{ $borrower->last_name }}</p>
            </div>
            <div>
              <p class="text-sm text-gray-500">Current Balance</p>
              <p class="text-lg font-semibold">₱{{ number_format($borrower->balance, 2) }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.auth>
