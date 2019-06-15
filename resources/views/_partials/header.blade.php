
<nav class="navbar navbar-expand-xl  py-0 w-100" style="z-index: 999; background: rgba(0,0,0,.0); position: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-3 px-4 py-3">
                <a href="/">
                <img class="w-75" src="{{asset('images/2.png')}}" alt="">
                </a>
            </div>
            <div class="col-7 collapse navbar-collapse">
                <nav style="margin: auto;">
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item p-3 {{ Request::is('*cloth*') ? '' : '' }}">
                            <a class="text-white {{ Request::is('*cloth*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }} " href="{{ route('cloth.index') }}" style="text-decoration: none;">Ткани</a>
                        </li>
                        <li class="nav-item p-3 {{ Request::is('*kind*') ? '' : '' }}">
                            <a class="text-white {{ Request::is('*kind*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('kind.index') }}" style="text-decoration: none;">Ателье</a>
                        </li>
                        <li class="nav-item p-3 {{ Request::is('*showroom*') ? '' : '' }}">
                            <a class="text-white {{ Request::is('*showroom*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('showroom.index') }}" style="text-decoration: none;">Шоурум</a>
                        </li>
                        <li class="nav-item p-3 {{ Request::is('*contacts*') ? '' : '' }}">
                            <a class="text-white {{ Request::is('*contacts*') ? 'font-weight-bold menu-active active border-bottom h5' : 'font-weight-light' }}" href="{{ route('contacts') }}" style="text-decoration: none;">Контакты</a>
                        </li>

                    </ul>
                    {{--<div class="container-fluid p-0">--}}
                        {{--<div class="col-3 p-0 {{ Request::is('*cloth*') ? 'border-top border-doc border-3 border-dark' : '' }}">--}}
                            {{--<a href="{{ route('cloth.index') }}" class="nav-link text-center px-0 py-1">--}}

                                {{--<p class="{{ Request::is('*cloth*') ? 'font-weight-bold active' : 'font-weight-light' }} menu-passive p-0 m-0">Ткани</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-3 p-0 {{ Request::is('*studio*') ? 'border-top border-doc border-3 border-dark' : '' }}">--}}
                            {{--<a href="{{ route('studio.index') }}" class="nav-link  text-center px-0 py-1">--}}

                                {{--<p class="{{ Request::is('*cloth*') ? 'font-weight-bold active' : 'font-weight-light' }} menu-passive p-0 m-0">Ателье</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-3 p-0 {{ Request::is('*showroom*') ? 'border-top border-doc border-3 border-dark' : '' }}">--}}
                            {{--<a href="{{ route('showroom.index') }}" class="nav-link  text-center px-0 py-1">--}}
                                {{--<p class="{{ Request::is('*showroom*') ? 'font-weight-bold active' : 'font-weight-light' }} menu-passive p-0 m-0">Шоурум</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-3 p-0 {{ Request::is('*contacts*') ? 'border-top border-doc border-3 border-dark' : '' }}">--}}
                            {{--<a href="{{ route('contacts') }}" class="nav-link  text-center px-0 py-1">--}}
                                {{--<p class="{{ Request::is('*contacts*') ? 'font-weight-bold active' : 'font-weight-light' }} menu-passive p-0 m-0">Контакты</p>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </nav>
            </div>
            <div class="col-2 p-4">
                <img style="float: right;" src="{{asset('images/icons/Group.png')}}" alt="">
            </div>
        </div>
    </div>
</nav>

