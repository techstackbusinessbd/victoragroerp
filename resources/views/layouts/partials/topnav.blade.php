{{-- <div class="topbar-item">
    <a href="{{ route('dashboard') }}" class="topbar-link btn fw-medium btn-link">
        Dashboard
    </a>

    <a href="" class="topbar-link btn fw-medium btn-link">
        Access Control
    </a>

    <a href="" class="topbar-link btn fw-medium btn-link">
        Reports
    </a>
</div> --}}

{{-- <div class="topbar-item">
    @foreach($menus as $menu)
        <a href="{{ $menu->children->count() ? route('dashboard', ['parent_id'=>$menu->id]) : ($menu->route ? route($menu->route) : '#') }}"
           class="topbar-link btn fw-medium btn-link
                  {{ request()->routeIs($menu->route) || request('parent_id') == $menu->id ? 'active' : '' }}">
            {{ $menu->name }}
        </a>
    @endforeach
</div> --}}

