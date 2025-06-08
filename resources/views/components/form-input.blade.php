@props(['label' => null])
<label class=" text-sm font-medium text-gray-700">
  {{ $label }}
</label>
<input {{ $attributes->merge([
    'class' => 'input mt-2 w-full',
]) }} />
