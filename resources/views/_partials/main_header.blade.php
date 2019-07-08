<nav class="navbar navbar-expand-xl menuse py-0 w-100 frs-menu" style="z-index: 999; background: rgba(0,0,0,.0); position: fixed;">
    <div class="container-fluid row">
        <div class="col-1"></div>
        <div class="col-md-2 col-6 px-4 py-3">
            <a href="/">
                <img class="w-75 logo" src="{{asset('images/2.png')}}" alt="">
                <img class="w-75 logo2 d-none" src="{{asset('images/logo-black.png')}}" alt="">
            </a>
        </div>
        <div class="col-md-7 col-4 collapse navbar-collapse">
            <nav style="margin: auto;">
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item py-2 px-4 {{ Request::is('*cloth*') ? '' : '' }}">
                        <a class="text-white menu-text {{ Request::is('*cloth*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }} " href="{{ route('cloth.index') }}" style="text-decoration: none;">Ткани</a>
                    </li>
                    <li class="nav-item py-2 px-4 {{ Request::is('*kind*') ? '' : '' }}">
                        <a class="text-white menu-text {{ Request::is('*kind*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('kind.index') }}" style="text-decoration: none;">Ателье</a>
                    </li>
                    <li class="nav-item py-2 px-4 {{ Request::is('*showroom*') ? '' : '' }}">
                        <a class="text-white menu-text {{ Request::is('*showroom*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('showroom.index') }}" style="text-decoration: none;">Шоурум</a>
                    </li>
                    <li class="nav-item py-2 px-4 {{ Request::is('*contacts*') ? '' : '' }}">
                    <a class="text-white menu-text {{ Request::is('*contacts*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('contacts') }}" style="text-decoration: none;">Контакты</a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="col-md-2 col-2 p-md-3 p-3">
            <div><a href="" data-toggle="modal" data-target="#basketModal" ><i class="fas fa-shopping-bag fa-lg text-light menu-text"></i></a></div>
        </div>
    </div>
</nav>


<nav class="navbar navbar-expand-xl menuse solid-nav shadow py-0 w-100 ext-menu" style="z-index: 999; background: rgba(0,0,0,.0); position: fixed; display: none;">
    <div class="container-fluid row">
        <div class="col-1"></div>
        <div class="col-md-2 col-6 px-4 py-3">
            <a href="/">
                <img class="w-75" src="{{asset('images/logo-black.png')}}" alt="">
            </a>
        </div>
        <div class="col-md-7 col-4 collapse navbar-collapse">
            <nav style="margin: auto;">
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item py-2 px-4 {{ Request::is('*cloth*') ? '' : '' }}">
                        <a class="text-dark {{ Request::is('*cloth*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }} " href="{{ route('cloth.index') }}" style="text-decoration: none;">Ткани</a>
                    </li>
                    <li class="nav-item py-2 px-4 {{ Request::is('*kind*') ? '' : '' }}">
                        <a class="text-dark {{ Request::is('*kind*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('kind.index') }}" style="text-decoration: none;">Ателье</a>
                    </li>
                    <li class="nav-item py-2 px-4 {{ Request::is('*showroom*') ? '' : '' }}">
                        <a class="text-dark {{ Request::is('*showroom*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('showroom.index') }}" style="text-decoration: none;">Шоурум</a>
                    </li>
                    {{--<li class="nav-item py-2 px-4 {{ Request::is('*contacts*') ? '' : '' }}">--}}
                    {{--<a class="text-dark {{ Request::is('*contacts*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('contacts') }}" style="text-decoration: none;">Контакты</a>--}}
                    {{--</li>--}}

                </ul>
            </nav>
        </div>
        <div class="col-md-2 col-2 p-md-3 p-3">
            <div><a href="" data-toggle="modal" data-target="#basketModal" ><i class="fas fa-shopping-bag fa-lg text-dark menu-text"></i></a></div>
        </div>
    </div>
</nav>
