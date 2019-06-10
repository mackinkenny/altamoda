
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
                        <li class="nav-item p-3">
                            <a class="text-white" href="{{asset('/clothes')}}">Ткани</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="text-white" href="{{asset('/studios')}}">Ателье</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="text-white" href="{{asset('/showrooms')}}">Шоурум</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="text-white" href="{{asset('contact')}}">Контакты</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-2 p-4">
                <img style="float: right;" src="{{asset('images/icons/Group.png')}}" alt="">
            </div>
        </div>
    </div>
</nav>

