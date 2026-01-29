@php
    $errorClass = $errors->has($name) ? 'is-invalid' : '';
    $classes = trim(($class ?? '') . ' form-select ' . $errorClass);
@endphp

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ ucfirst(str_replace('_',' ',$name)) }}
        @if($required) <span class="text-danger">*</span> @endif
    </label>

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $classes]) }}
    >
        <option value="">-- Select --</option>
        @foreach($options as $key => $label)
            <option value="{{ $key }}" {{ old($name, $selected) == $key ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>

    <x-form.error :name="$name" />
</div>
