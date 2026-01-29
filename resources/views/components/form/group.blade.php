@php
    // Validation error check
    $hasError = $name && $errors->has($name);
    $classes = trim('mb-3 ' . ($class ?? '') . ' ' . ($hasError ? 'has-error' : ''));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($label)
        <label class="form-label">
            {{ $label }}
            @if($required) <span class="text-danger">*</span> @endif
        </label>
    @endif

    {{-- Field slot --}}
    {{ $slot }}

    {{-- Help text --}}
    @if($help)
        <div class="form-text">{{ $help }}</div>
    @endif

    {{-- Error message --}}
    @if($name)
        <x-form.error :name="$name" />
    @endif
</div>
