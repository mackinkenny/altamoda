@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/showroom_main.png')}}); background-size: cover;">
        <div class="row justify-content-center w-100 py-5">
            <div class="col-4 p-5 my-5">
                <div class="text-center p-5">
                    <span class="display-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">Шоурум</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-12 px-4 pt-2" >
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/woman.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            Женская одежда
                        </p>
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>
            <div class="col-6 p-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/man.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            Мужская одежда
                        </p>
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>
            <div class="col-6 p-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/kids.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            Детская одежда
                        </p>
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection