<ul class="nav flex-column bg-white border">
    <span class="nav-item py-1 border-bottom bg-secondary text-center text-light">
        Ткани
    </span>
    <li class="nav-item py-1 border-bottom {{ Request::is('*cloth*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*cloth*') ? 'text-light' : 'text-dark' }}" href="{{ route('cloth.admin') }}">Ткани</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*season*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*season*') ? 'text-light' : 'text-dark' }}" href="{{ route('season.admin') }}">Сезоны</a>
    </li>
    <span class="nav-item py-1 border-bottom bg-secondary text-center text-light">
        Ателье
    </span>
    <li class="nav-item py-1 border-bottom {{ Request::is('*kind*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*kind*') ? 'text-light' : 'text-dark' }}" href="{{ route('kind.admin') }}">Модели одежды</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*parameter*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*parameter*') ? 'text-light' : 'text-dark' }}" href="{{ route('parameter.admin') }}">Параметры мерки</a>
    </li>
    <span class="nav-item py-1 border-bottom bg-secondary text-center text-light">
        Шоурум
    </span>
    <li class="nav-item py-1 border-bottom {{ Request::is('*showroom*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*showroom*') ? 'text-light' : 'text-dark' }}" href="{{ route('showroom.admin') }}">Готовые варианты</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('*category*') ? 'bg-info' : '' }}">
        <a class="nav-link {{ Request::is('*category*') ? 'text-light' : 'text-dark' }}" href="{{ route('category.admin') }}">Категории</a>
    </li>
</ul>