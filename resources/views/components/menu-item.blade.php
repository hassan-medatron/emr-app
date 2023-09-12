@props(['active', 'href', 'iconClass'])

<li class="menu-item {{ $active ? 'active' : '' }}">
    <a href="{{ $href }}" class="menu-link">
        @if (!empty($iconClass))
            <i class="menu-icon tf-icons {{ $iconClass }}"></i>
        @endif
        <div data-i18n="Analytics">{{ $slot }}</div>
    </a>
</li>
