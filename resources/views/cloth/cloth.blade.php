@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/cloth_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-md-5 py-0">
            <div class="col-4 py-md-5 py-0 my-5">
                <div class="text-center py-5">
                    <span class="display-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">Ткани</span>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5">
        <div class="row justify-content-center mx-md-5 mx-0 p-md-5 p-0">
            <div class="col-md-3 col-12 text-center mb-md-0 mb-5" >
                <div class="p-md-5 p-0" style="background-image: url({{asset('images/spring.png')}}); background-size: cover;">
                    <div class="py-5 my-md-5 my-0" >
                        <div class="pt-5 pb-4">
                            <span class="h2 font-weight-bold mt-5 " style="font-size: 22px;color: #ffffff;text-align: center;font-style:normal">Весна</span>
                            <br>
                        </div>
                        <div class="pb-5 mb-4">
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-12 text-center mb-md-0 mb-5" >
                <div class="p-md-5 p-0" style="background-image: url({{asset('images/summer.png')}}); background-size: cover;">
                    <div class="py-5 my-md-5 my-0" >
                        <div class="pt-5 pb-4">
                            <span class="h2 font-weight-bold mt-5 " style="font-size: 22px;color: #ffffff;text-align: center;font-style:normal">Лето</span>
                            <br>
                        </div>
                        <div class="pb-5 mb-4">
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 text-center mb-md-0 mb-5" >
                <div class="p-md-5 p-0" style="background-image: url({{asset('images/autumn.png')}}); background-size: cover;">
                    <div class="py-5 my-md-5 my-0">
                        <div class="pt-5 pb-4">
                            <span class="h2 font-weight-bold mt-5 " style="font-size: 22px;color: #ffffff;text-align: center;font-style:normal">Осень</span>
                            <br>
                        </div>
                        <div class="pb-5 mb-4">
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 text-center mb-md-0 mb-5" >
                <div class="p-md-5 p-0" style="background-image: url({{asset('images/winter.png')}}); background-size: cover;">
                    <div class="py-5 my-md-5 my-0" >
                        <div class="pt-5 pb-4">
                            <span class="h2 font-weight-bold mt-5 " style="font-size: 22px;color: #ffffff;text-align: center;font-style:normal">Зима</span>
                            <br>
                        </div>
                        <div class="pb-5 mb-4">
                            <a class="px-4 py-2 bg-dark" href="{{asset('/cloth.catalog')}}" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection