
@php
    $currentRoute = Route::currentRouteName();

    $isActive = !empty($menu['route']) && $menu['route'] == $currentRoute;
    $hasActiveChild = isset($menu['children']) && collect($menu['children'])->contains(fn($child) => checkActiveRecursive($child, $currentRoute));
    $activeClass = $isActive ? 'active' : '';
    $collapseShow = ($isActive || $hasActiveChild) ? 'show' : '';
@endphp



<li class="side-nav-item {{ $activeClass }}">
    @if(isset($menu['children']))
        <a data-bs-toggle="collapse" href="#menu{{ md5($menu['title']) }}" class="side-nav-link">
            @if(!empty($menu['icon']))
                <span class="menu-icon"><i data-lucide="{{ $menu['icon'] }}"></i></span>
            @endif
            <span class="menu-text">{{ $menu['title'] }}</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse {{ $collapseShow }}" id="menu{{ md5($menu['title']) }}">
            <ul class="sub-menu">
                @foreach($menu['children'] as $child)
                    @include('layouts.partials.menu-item-recursive', ['menu'=>$child])
                @endforeach
            </ul>
        </div>
    @else
        <a href="{{ !empty($menu['route']) ? route($menu['route']) : '#' }}" class="side-nav-link {{ $activeClass }}">
            @if(!empty($menu['icon']))
                <span class="menu-icon"><i data-lucide="{{ $menu['icon'] }}"></i></span>
            @endif
            <span class="menu-text">{{ $menu['title'] }}</span>
        </a>
    @endif
</li>

