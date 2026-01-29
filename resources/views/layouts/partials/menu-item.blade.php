@php
    $menus = config('sidebar');
@endphp

<ul class="side-nav">
    <li class="side-nav-title mt-2" data-lang="Navigation">Navigation</li>
    @foreach($menus as $menu)
        @include('layouts.partials.menu-item-recursive', ['menu'=>$menu])
    @endforeach
</ul>


