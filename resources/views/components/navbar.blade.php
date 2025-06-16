<div class="bg-base-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 navbar justify-between">
    <div>
      <a href="/dashboard" class="text-xl font-bold flex items-center gap-2">
        <img src="{{ asset('loan.svg') }}" alt="PinoyLoan" class="w-10 h-10">
        PinoyLoan
      </a>
    </div>
    <div>
      <!-- Mobile menu button -->
      <button class="btn btn-ghost md:hidden"
        onclick="document.getElementById('mobile-menu').classList.toggle('translate-x-full')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <!-- Desktop menu -->
      <ul class="menu menu-horizontal px-1 space-x-4 hidden md:flex">
        <li><x-nav-link href="/dashboard" :active="request()->is('dashboard*')">Dashboard</x-nav-link></li>
        <li><x-nav-link href="/borrowers" :active="request()->is('borrowers*')">Borrowers</x-nav-link></li>
        <li><x-nav-link href="/payments" :active="request()->is('payments*')">Payments</x-nav-link></li>
      </ul>
    </div>
    @auth
      <div class="hidden md:block">
        <form action="/logout" method="POST">
          @csrf
          <x-form-button>Logout</x-form-button>
        </form>
      </div>
    @endauth
  </div>
  <!-- Mobile menu -->
  <div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-60 md:hidden transform translate-x-full transition-transform duration-300 ease-in-out p-4 shadow-lg bg-base-100">
    <div class="flex flex-col h-full">
      <button class="btn btn-ghost self-end"
        onclick="document.getElementById('mobile-menu').classList.toggle('translate-x-full')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <ul class="menu menu-vertical px-4 py-2 space-y-2 w-full">
        <li class="w-full"><x-nav-link href="/dashboard" :active="request()->is('dashboard*')">Dashboard</x-nav-link></li>
        <li class="w-full"><x-nav-link href="/borrowers" :active="request()->is('borrowers*')">Borrowers</x-nav-link></li>
        <li class="w-full"><x-nav-link href="/payments" :active="request()->is('payments*')">Payments</x-nav-link></li>
      </ul>
      @auth
        <div class="mt-auto flex flex-col items-end justify-end h-full">
          <form action="/logout" method="POST">
            @csrf
            <x-form-button>Logout</x-form-button>
          </form>
        </div>
      @endauth
    </div>
  </div>
</div>
