<x-layouts.guest>
  <x-slot:title>Register | PinoyLoan</x-slot:title>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="{{ asset('loan.svg') }}" alt="Your Company">
      <h2 class="text-center text-2xl/9 font-bold text-gray-900">Create an account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-4" action="/register" method="POST">
        @csrf
        <div>
          <x-form-input type="text" :value="old('name')" id="name" name="name" placeholder="Your full name"
            label="Full Name" />
          <x-form-error name="name" />
        </div>
        <div>
          <x-form-input type="email" :value="old('email')" id="email" name="email" placeholder="example@email.com"
            label="Email address" />
          <x-form-error name="email" />
        </div>
        <div>
          <x-form-input type="password" :value="old('password')" id="password" name="password" placeholder="Password"
            label="Password" />
          <x-form-error name="password" />
        </div>
        <div>
          <x-form-input type="password" :value="old('password_confirmation')" id="password_confirmation" name="password_confirmation"
            placeholder="Confirm Password" label="Confirm Password" />
          <x-form-error name="password_confirmation" />
        </div>
        <x-form-button>Register</x-form-button>
      </form>

      <p class="mt-10 text-center text-sm/6 text-gray-500">
        Already have an account?
        <a href="/login" class="font-semibold text-primary hover:text-primary/80">Login</a>
      </p>
    </div>
  </div>
</x-layouts.guest>
