@props([
    'loadingTarget' => ''
])
<button {{ $attributes->merge(['class' => 'flex items-center']) }}>
    @if (!empty($loadingTarget))
        <div wire:loading.delay wire:target="{{ $loadingTarget }}" class="btn-spinner mr-2"></div>
    @endif

    {{ $slot }}
</button>