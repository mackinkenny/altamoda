@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/studio_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-md-5 py-0">
            <div class="col-4 py-md-5 py-0 my-5">
                <div class="text-center py-5">
                    <span class="display-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">Контакты</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <h2 data-aos="fade-up" class="font-weight-bold Montserrat mb-5">Наши контакты</h2>
                <p data-aos="fade-up" class="Montserrat">
                    <a href="https://2gis.kg/bishkek/query/%D0%BC%D0%B5%D0%B4%D0%B5%D1%80%D0%BE%D0%B2%D0%B0%2051/geo/15763234351160600?queryState=center%2F74.623239%2C42.851841%2Fzoom%2F18" style="color:black;">
                    <strong>Адрес:</strong>  г.Бишкек, ул, Медерова 51.
                    </a>
                </p>
                <p data-aos="fade-up" class="Montserrat">
                    <a href="tel:+996 555 52 29 99" style="color: black;">
                    <strong>Телефон:</strong> +996 555 52 29 99
                    </a>
                </p>
                <p data-aos="fade-up" class="Montserrat">
                    <strong>Режим работы:</strong> пн-сб 10:00 - 20:00
                </p>

                <h2 data-aos="fade-up" class="font-weight-bold Montserrat my-5">Наши соц.сети</h2>
                <a data-aos="fade-up" href="https://www.instagram.com/altamoda_bishkek/?hl=ru" style="color:black;">
                    <i class="fab fa-instagram fa-3x social-icon"></i>
                </a>
            </div>
            <div class="col-6"></div>
        </div>
    </div>

@endsection