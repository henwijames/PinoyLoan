<x-layouts.auth>
  <x-slot:title>Create Borrower | PinoyLoan</x-slot:title>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex items-center justify-between gap-2">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-user text-2xl"></i>
        <h1 class="text-2xl font-bold"><span class="font-normal">Create Borrower</span></h1>
      </div>
      <a href="/borrowers" class="btn btn-primary">Back</a>
    </div>
    <div class="mt-6 space-y-4">
      <form action="/borrowers" method="POST" class="space-y-4">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4 w-full">
          <div>
            <x-form-input name="first_name" label="First Name" />
            <x-form-error name="first_name" />
          </div>
          <div>
            <x-form-input name="middle_name" label="Middle Name (Optional)" />
            <x-form-error name="middle_name" />
          </div>
          <div>
            <x-form-input name="last_name" label="Last Name" />
            <x-form-error name="last_name" />
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2  gap-4 w-full">
          <div>
            <x-form-input name="address" label="Address" />
            <x-form-error name="address" />
          </div>
          <div>
            <x-form-input name="contact_number" label="Contact Number" />
            <x-form-error name="contact_number" />
          </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2  gap-4 w-full">
          <div>
            <x-form-input name="amount_borrowed" label="Amount Borrowed" />
            <x-form-error name="amount_borrowed" />
          </div>
          <div>
            <x-form-input type="date" name="due_date" label="Due Date" />
            <x-form-error name="due_date" />
          </div>
        </div>
        <div class="flex justify-end">
          <x-form-button type="submit" class="btn btn-primary w-full sm:w-auto">Create</x-form-button>
        </div>
      </form>
    </div>
  </div>
</x-layouts.auth>
