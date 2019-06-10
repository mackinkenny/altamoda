<ul class="nav flex-column bg-white border">
    <li class="nav-item py-1 border-bottom {{ Request::is('*cloth*') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('*cloth*') ? 'text-light' : 'text-dark' }}" href="{{ route('cloth.index') }}">Ткани</a>
    </li>
</ul>