@props([
    'id',
    'label',
    'error' => false,
    'type' => 'text',
    'groupClass' => '',
    'placeholder' => '',
])
<div class="{{ $groupClass }}"
    x-data
    x-init="new Pikaday({field: $refs.input, format: 'DD/MM/YYYY'});"
    @change="$dispatch('input', $event.target.value)"
>
    @if ($label)
        <label class="form-label" for="{{ $id }}">{{ $label }} :</label>
    @endif

    <input x-ref="input" id="{{ $id }}" {{ $attributes->merge([
        'class' => 'form-input',
        'type' => $type
    ]) }} placeholder="{{ $placeholder }}" />

    @if ($error)
        <div class="form-error">{{ $error }}</div>
    @endif
</div>
