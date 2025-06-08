<x-layouts.guest>
  <div class="hero min-h-screen">
    <div
      class="hero-content w-full flex-col lg:flex-row-reverse items-center lg:justify-between lg:text-left text-center">
      <img src="{{ asset('loan.svg') }}" class="max-w-sm w-full lg:w-auto sm:w-1/2" />
      <div>
        <h1 class="text-5xl font-bold">PinoyLoan</h1>
        <p class="py-6 max-w-2xl">
          PinoyLoan is your trusted financial companion for managing loans and payments. Our platform offers a seamless
          experience for tracking your loans, managing payments, and staying on top of your financial commitments.
        </p>
        <a href="/login" class="btn btn-primary">Get Started</a>
      </div>
    </div>
  </div>
</x-layouts.guest>
