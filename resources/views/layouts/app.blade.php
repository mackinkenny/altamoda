<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ALTAMODA</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" id="redux-google-fonts-salient_redux-css" href="http://fonts.googleapis.com/css?family=Montserrat&amp;ver=1559628150" type="text/css" media="all">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

@include('_partials.main_header')
<div id="app">

    <main>
        @yield('content')
    </main>
</div>
@include('_partials/footer')
@include('modals.basket')
<ul class="menu bottomRight">
    <li class="share top">
        <i class="fas fa-share-alt-square fa-2x main-co"></i>
        <ul class="submenu">
            {{--<li><a href="#" class="whatsapp"><span>Whatsapp</span><i class="fab fa-whatsapp fa-2x"></i></a></li>--}}
            {{--<li><a href="#" class="viber"><span>Viber</span><i class="fab fa-viber fa-2x"></i></a></li>--}}
            {{--<li><a href="#" class="telegram"><span>Telegram</span><i class="fab fa-telegram-plane fa-2x"></i></a></li>--}}
            <li><a href="https://www.instagram.com/altamoda_bishkek/?hl=ru" class="instagram"><span>Instagram</span><i class="fab fa-instagram fa-2x"></i></a></li>
        </ul>
    </li>
</ul>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var height = 40;
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= height - 5) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.menu-text').addClass('menu-text-hov');

                $('.logo').addClass('d-none');
                $('.logo2').removeClass('d-none');
            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.menu-text').removeClass('menu-text-hov');
                $('.logo2').addClass('d-none');
                $('.logo').removeClass('d-none');
            }
        });
    });
</script>
<script>
    function f(id) {
        $.ajax({
            url: '/basketdelete/' + id,
            method: 'GET',
            success: data => {
                $('#'+id).addClass('d-none');
            },
            error: () => {
                alert('Ошибка');
            }
        });
    }
</script>
</body>
</html>
