<x-layouts.auth>
  <x-slot:title>Dashboard | PinoyLoan</x-slot:title>
  <div class="w-full bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
      <div class="flex items-center gap-2 text-white">
        <i class="fa-regular fa-user text-2xl"></i>
        <h1 class="text-2xl font-bold"><span class="font-normal">Welcome</span>, {{ auth()->user()->name ?? 'User' }}</h1>
      </div>
    </div>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <x-card-counts count="100" title="Total Borrowers" icon="users" />
      <x-card-counts count="100" title="Total Loaned Amount" icon="landmark" />
      <x-card-counts count="100" title="Total Collected" icon="sack-dollar" />
      <x-card-counts count="100" title="Remaining Balance" icon="receipt" />
    </div>
    <div class="mt-6 space-y-4">
      <h2 class="text-2xl font-bold">Borrowers</h2>
      <x-borrowers-table :borrowers="$borrowers" />
    </div>
  </div>
</x-layouts.auth>
