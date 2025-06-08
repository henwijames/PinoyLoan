@props(['active' => false])

<a {{ $attributes->merge(['class' => ($active ? 'bg-primary text-white' : 'hover:bg-primary/80 hover:text-white') . ' block rounded-md px-3 py-2 text-base font-medium flex-1']) }}
  aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
