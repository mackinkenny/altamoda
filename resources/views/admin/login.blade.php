<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ALTAMODA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
<style>
    body
    {
        background-image: url({{asset('uploads/images/login-background.jpg')}});
        background-size: cover;
    }
    .h2
    {
        color: rgba(0,0,0,0.6);
        text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
        0px -5px 35px rgba(255,255,255,0.3);
    }
</style>
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header bg-dark text-center h2 font-weight-bold"><img  class="w-75" src="{{asset('images/2.png')}}" alt="">

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="email" class="col-md-4 col-form-label text-md-left ml-3">{{ __('E-Mail') }}</label>
                            <div class="form-group row justify-content-center">


                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-left ml-3">{{ __('Пароль') }}</label>
                            <div class="form-group row justify-content-center">


                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                            {{--<div class="form-check">--}}
                            {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                            {{--<label class="form-check-label" for="remember">--}}
                            {{--{{ __('Remember Me') }}--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-dark mt-4 w-100">
                                        {{ __('Войти') }}
                                    </button>

                                    {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                    {{--@endif--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
