@extends('layouts.app')

@section('content')
    <video autoplay muted loop class="w-100" id="myVideo" style="position: absolute; opacity: 0.7;">
        <source src="{{asset('/video/main-video.mp4')}}" type="video/mp4">
    </video>
    <div class="container-fluid py-5 position-relative mb-md-5 mb-0">
        <div class="backdrop"></div>
        <div class="row py-5 py-md-5 justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 py-5 text-center main-pic">
                <img class="pic-75" src="{{asset('/images/2.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container my-5 content-container">
        <div class="row p-md-5 p-3">
            <div class="col-md-6 col-12 p-md-5 p-0 mb-md-0 mb-5">
                <p>#Дом тканей</p>
                <h2 class="" style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">ALTA MODA</h2>
                <p class="h2" style="font-size: 15px;color: #050505;line-height: 22px;text-align: left; font-family: 'Montserrat'; font-weight:400;font-style:normal">
                    Создавая NUMI, нашей главной целью было качество, индивидуальность и эстетика, на чем мы не перестанем делать акцент.
                </p>
                <p class="h2" style="font-size: 15px;color: #050505;line-height: 22px;text-align: left; font-family:'Montserrat'; font-weight:400;font-style:normal">
                    Покупая то или иное изделие, Вы покупаете не только платье, юбку, или блузу, Вы покупаете право на эксклюзивность, право на самовыражение,индивидуальность и, конечно, качество.
                </p>
            </div>
            <div class="col-md-6 col-12 text-right p-0">
                <img class="pic-100" src="{{asset('/images/1.jpg')}}" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6 p-md-0 p-3">
                <span style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">
                    ПОЧЕМУ
                </span>
                <br>
                <span class="ml-md-5 ml-0" style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">
                    ALTA MODA
                </span>
            </div>
            <div class="col-12 col-md-6">
                <p style="font-size: 15px;color: #050505;line-height: 22px;text-align: left;font-family:Montserrat;font-weight:400;font-style:normal">
                    NUMI - это брэнд, где каждое изделие было кропотливо отработано вплоть до каждой малейшей детали, где мы начинали все заново, если изделие выглядело на все 99, а не на 100. NUMI - это брэнд, где каждое изделие лишь в единственном экземпляре и на всю жизнь! #numibyaltamoda
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6 p-md-5 p-3">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/3.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5">
                        <p class="h2 px-5 pt-5 pb-4" style="font-size: 35px;color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            Ткани
                        </p>
                        <div class="col-9" style="text-align: center; vertical-align: middle;">
                            <a class="px-5 py-2 mb-5 bg-white " href=""  style="display:inline-block; text-decoration: none; color: #000; font-weight: bold; font-size: 20px;">
                                Смотреть
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-md-5 p-3">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/4.png')}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5">
                        <p class="h2 px-5 pt-5 pb-4" style="font-size: 35px;color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            Ателье
                        </p>
                        <div class="col-9"  style="display:inline-block;">
                            <a class="px-5 py-2 mb-5 bg-white " href=""  style="display:inline-block; text-decoration: none; color: #000; font-weight: bold; font-size: 20px;">
                                Смотреть
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 px-md-5 px-3" >
                    <div class="row justify-content-center p-5" style="background-image: url({{asset('/images/5.png')}}); background-size: cover; background-position: center; ">
                        <div class="p-5 mb-5">
                            <p class="h2 px-5 pt-5 pb-4" style="font-size: 35px;color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                                Готовые вещи
                            </p>
                            <div class="col-9 px-4">
                                <a class="px-5 py-2 mx-md-5 mx-0 mb-5 bg-white " href="{{asset('cloth')}}"  style="display:inline-block; text-decoration: none; color: #000; font-weight: bold; font-size: 20px;">
                                    Смотреть
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


@endsection
