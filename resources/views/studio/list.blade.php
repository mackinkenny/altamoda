@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/studio_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-5">
            <div class="col-4 p-5 my-5">
                <div class="text-center p-5">
                    <span class="display-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">Ателье</span>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 m-5">
        <div class="row">
            <div class="col-4 px-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/dress.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 my-5 text-center">
                        <div class="pt-5 mt-5">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight: 700;font-style:normal">
                                Платье
                            </p>
                        </div>
                        <div class="mb-5 pb-5">
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-6 px-4">
                        <div class="row justify-content-center" style="background-image: url({{asset('/images/shirt.png')}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                    Рубашки
                                </p>
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 px-4">
                        <div class="row justify-content-center" style="background-image: url({{asset('/images/pants.png')}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                    Штаны
                                </p>
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-4 px-2">
                    <div class="row justify-content-center" style="background-image: url({{asset('/images/coat.png')}}); background-size: cover; background-position: center; ">
                        <div class="p-5 mb-5 text-center">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                Пальто
                            </p>
                            <div class="p-3">
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="row">
                    <div class="col-6 px-4">
                        <div class="row justify-content-center" style="background-image: url({{asset('/images/skirt.png')}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                    Юбки
                                </p>
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 px-4">
                        <div class="row justify-content-center" style="background-image: url({{asset('/images/scarf.png')}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                    Шарфы
                                </p>
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-4 px-2">
                    <div class="row justify-content-center" style="background-image: url({{asset('/images/coat.png')}}); background-size: cover; background-position: center; ">
                        <div class="p-5 mb-5 text-center">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                Пальто
                            </p>
                            <div class="p-3">
                                <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 px-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/shorts.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 my-5 text-center">
                        <div class="pt-5 mt-5">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight: 700;font-style:normal">
                                Шорты
                            </p>
                        </div>
                        <div class="mb-5 pb-5">
                            <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection