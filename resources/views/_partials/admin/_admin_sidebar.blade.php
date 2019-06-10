<ul class="nav flex-column bg-white border">
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/cloth') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/cloth') ? 'text-light' : 'text-dark' }}" href="{{ route('cloth.index') }}">Ткани</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/studio') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/studio') ? 'text-light' : 'text-dark' }}" href="{{ route('studio.index') }}">Ателье</a>
    </li>
</ul>