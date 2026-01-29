@php
    $errorClass = $errors->has($name) ? 'is-invalid' : '';
    $classes = trim(($class ?? '') . ' form-control ' . $errorClass);
@endphp

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ ucfirst(str_replace('_',' ',$name)) }}
        @if($required) <span class="text-danger">*</span> @endif
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    >

    <x-form.error :name="$name" />
</div>
