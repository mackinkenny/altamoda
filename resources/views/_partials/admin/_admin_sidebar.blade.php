<ul class="nav flex-column bg-white border">
    <li class="nav-item py-1 border-bottom {{ Request::is('*cloth*') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('*cloth*') ? 'text-light' : 'text-dark' }}" href="{{ route('cloth.admin') }}">Ткани</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*kind*') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('*kind*') ? 'text-light' : 'text-dark' }}" href="{{ route('kind.admin') }}">Модели одежды</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*parameter*') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('*parameter*') ? 'text-light' : 'text-dark' }}" href="{{ route('parameter.admin') }}">Параметры мерки</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*showroom*') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('*showroom*') ? 'text-light' : 'text-dark' }}" href="{{ route('showroom.admin') }}">Готовые варианты</a>
    </li>
</ul>