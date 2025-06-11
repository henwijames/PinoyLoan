@props(['count', 'title', 'icon'])

<div class="bg-base-300 p-8 rounded-lg flex items-center justify-between">
  <div>
    <p class="text-2xl font-bold">{{ $count }}</p>
    <p class="text-xs font-bold">{{ $title }}</p>
  </div>
  <i class="fa-solid fa-{{ $icon }} text-4xl"></i>
</div>
