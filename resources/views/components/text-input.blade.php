@props([
    'id',
    'label',
    'error' => false,
    'type' => 'text',
    'groupClass' => '',
    'placeholder' => '',
])
<div class="{{ $groupClass }}">
    @if ($label)
        <label class="form-label" for="{{ $id }}">{{ $label }} :</label>
    @endif

    <input id="{{ $id }}" {{ $attributes->merge([
        'class' => 'form-input',
        'type' => $type
    ]) }} placeholder="{{ $placeholder }}" />
    
    @if ($error)
        <div class="form-error">{{ $error }}</div>
    @endif
</div>