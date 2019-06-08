<footer class="" style="background-color: black">
    <div class=" p-5">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-12 col-sm-6 my-3 pt-0 mx-5">
                <nav class="nav flex-column">
                    <div class="px-5 py-3"><img src="{{asset('images/logo-1.png')}}" alt=""></div>

                    <div class="px-5 py-3"><img src="{{asset('images/logo-2.png')}}" alt=""></div>
                </nav>
            </div>
            <div class="col-md-3 col-lg-3 col-12 col-sm-6 my-3 pt-3">
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="{{asset('about_us')}}">О нас</a>
                    <a class="nav-link text-white" href="{{asset('cloth')}}">Ткани</a>
                    <a class="nav-link text-white" href="{{asset('studio')}}">Ателье</a>
                    <a class="nav-link text-white" href="{{asset('showroom')}}">Готовые вещи</a>
                </nav>
            </div>

            <div class="col-md-3 col-lg-3 col-12 col-sm-6 my-3 pt-3">
                <nav class="nav flex-column">

                    <a class="nav-link text-white" href="{{asset('FAQ')}}">FAQ</a>
                    <a class="nav-link text-white" href="{{asset('change')}}">Обмен и возврат</a>
                    <a class="nav-link text-white" href="{{asset('order')}}">Доставка</a>
                </nav>
            </div>

            <div class="col-md-3 col-lg-3 col-12 col-sm-6 my-3 pt-3">
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="https://2gis.kg/bishkek/query/%D0%BC%D0%B5%D0%B4%D0%B5%D1%80%D0%BE%D0%B2%D0%B0%2051/geo/15763234351160600?queryState=center%2F74.623239%2C42.851841%2Fzoom%2F18">Медерова, 51</a>
                    <a class="nav-link text-white" href="tel:+996 555 52 29 99">+996 555 52 29 99</a>
                    <span class="nav-link text-white" >пн-сб 10:00 - 20:00</span>'
                    <div class="nav-link">
                        <img class="mr-4" src="{{asset('images/icons/facebook.png')}}" alt="">
                        <img class="mr-4" src="{{asset('images/icons/instagram.png')}}" alt="">
                        <img class="mr-4" src="{{asset('images/icons/whatsapp.png')}}" alt="">
                    </div>
                </nav>
            </div>
        </div>
    </div>
</footer>


@push('styles')

@endpush
