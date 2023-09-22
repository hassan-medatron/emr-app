@props(['routesArray' => [], 'iconClass', 'menuGroupName'])

<li class="menu-item {{ request()->routeIs($routesArray) ? 'open active' : '' }}">

    <a href="javascript:void(0);" class="menu-link menu-toggle">
        @if (!empty($iconClass))
            <i class="menu-icon tf-icons {{ $iconClass }}"></i>
        @endif
        <div data-i18n="Layouts">{{ $menuGroupName }}</div>
    </a>

    <ul class="menu-sub">
        {{ $slot }}
    </ul>
</li>
