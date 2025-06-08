<x-layouts.guest>
  <x-slot:title>Login | PinoyLoan</x-slot:title>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="{{ asset('loan.svg') }}" alt="Your Company">
      <h2 class="text-center text-2xl/9 font-bold text-gray-900">Log in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('login') }}" method="POST">
        @csrf
        <div>
          <x-form-input type="email" :value="old('email')" id="email" name="email" placeholder="example@email.com"
            label="Email address" />
          <x-form-error name="email" />
        </div>
        <div>
          <x-form-input type="password" id="password" name="password" placeholder="Password" label="Password" />
          <x-form-error name="password" />
        </div>
        <x-form-button>Login</x-form-button>
      </form>

      <p class="mt-10 text-center text-sm/6 text-gray-500">
        Not a member?
        <a href={{ route('register') }} class="font-semibold text-primary hover:text-secondary">Register!</a>
      </p>
    </div>
  </div>
</x-layouts.guest>
