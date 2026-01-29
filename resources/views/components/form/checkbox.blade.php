@php
    $isChecked = old($name, $checked);
    $classes = trim(($class ?? '') . ' form-check-input');
@endphp

<div class="form-check mb-3">
    <input
        type="checkbox"
        name="{{ $name }}"
        value="{{ $value }}"
        id="{{ $name }}"
        {{ $isChecked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    >
    <label class="form-check-label" for="{{ $name }}">
        {{ ucfirst(str_replace('_',' ',$name)) }}
    </label>

    <x-form.error :name="$name" />
</div>
