@php
    $classes = trim('card ' . ($class ?? ''));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($title)
        <div class="card-header">
            {{ $title }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
