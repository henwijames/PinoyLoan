<x-layouts.auth>
  <x-slot:title>Create Payment | PinoyLoan</x-slot:title>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex items-center justify-between gap-2">
      <h1 class="text-2xl font-bold">Make Payment for {{ $borrower->first_name }} {{ $borrower->middle_name }}
        {{ $borrower->last_name }}</h1>
    </div>
    <h2 class="text-lg font-bold">Balance: ₱{{ number_format($borrower->balance, 2) }}</h2>
    @if (session('error'))
      <x-error-alert message="{{ session('error') }}" />
    @endif
    <form action="{{ route('payments.store', $borrower->id) }}" method="POST" class="space-y-4">
      @csrf
      <x-form-input name="amount" type="number" label="Amount" required />
      <x-form-button class="btn btn-primary">Create</x-form-button>
    </form>
  </div>
</x-layouts.auth>
