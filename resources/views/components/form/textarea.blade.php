@php
    $errorClass = $errors->has($name) ? 'is-invalid' : '';
    $classes = trim(($class ?? '') . ' form-control ' . $errorClass);
@endphp

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ ucfirst(str_replace('_',' ',$name)) }}
        @if($required) <span class="text-danger">*</span> @endif
    </label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    >{{ old($name, $value) }}</textarea>

    <x-form.error :name="$name" />
</div>
