<x-layouts.auth>
  <x-slot:title>Borrowers | PinoyLoan</x-slot:title>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex items-center justify-between gap-2">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-user text-2xl"></i>
        <h1 class="text-2xl font-bold"><span class="font-normal">Borrowers</span></h1>
      </div>
      <a href="/borrowers/create" class="btn btn-primary">Add Borrower</a>
    </div>
    <div class="mt-6 space-y-4">
      @if (session('success'))
        <x-alert type="success" :message="session('success')" />
      @endif
      <x-borrowers-table :borrowers="$borrowers" />
    </div>
  </div>
</x-layouts.auth>
