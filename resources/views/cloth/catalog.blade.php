@extends('layouts.app')
@section('content')
    @push('styles')
        <style>
            .frs-menu{
                display:none!important;
            }
            .ext-menu{
                display:block!important;
            }
        </style>
        @endpush
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-6">
                <p class="display-3 text-secondary mb-5">
                    Ткани
                </p>
                <div class="">
                    <a class="text-secondary Montserrat" href="/">Главная</a>
                    <i class="mx-4 text-secondary fa fa-angle-right"></i>
                    <a class="text-secondary Montserrat" href="{{ route('cloth.index') }}">Ткани</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-3 my-5">
            <p class="text-secondary h3">
                Каталог тканей
            </p>
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link Montserrat text-dark active" style="font-size: 16px;" id="" data-toggle="tab" href="#summer" role="tab" aria-controls="" aria-selected="true">Лето</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab" href="#autumn" role="tab" aria-controls="" aria-selected="true">Осень</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab" href="#winter" role="tab" aria-controls="" aria-selected="true">Зима</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab" href="#spring" role="tab" aria-controls="" aria-selected="true">Весна</a>
                </li>
            </ul>
        </div>

            <div class="tab-content col-9" id="myTabContent">
                <div class="tab-pane active show" style="min-height: 100vh;" id="summer" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p class="text-secondary Montserrat" style="font-size: 30px;">
                            Летняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $summers = \App\Cloth::where('season_id',1)->get();
                        ?>
                            @if($summers->count() == 0)
                                <div class="text-center col-12">
                                    <p class="text-secondary Montserrat" style="font-size: 20px;">
                                        Каталог пуст
                                    </p>
                                </div>
                            @endif
                        @foreach($summers as $summer)

                                <div class="col-4 text-center p-3 mb-3 season-effect">
                                    <a href="{{ asset('clothbasket/'.$summer->id) }}">
                                    <img class="w-100" style="height:230px; width:230px;border-radius:20px;" src="{{asset('uploads/'.$summer->img_path)}}" alt="">
                                    <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$summer->name}}</p>
                                    </a>
                        </div>

                                @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="autumn" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p class="text-secondary Montserrat" style="font-size: 30px;">
                            Осенняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $autumns = \App\Cloth::where('season_id',4)->get();
                        ?>
                            @if($autumns->count() == 0)
                                <div class="text-center col-12">
                                    <p class="text-secondary Montserrat" style="font-size: 20px;">
                                        Каталог пуст
                                    </p>
                                </div>
                            @endif
                        @foreach($autumns as $autumn)
                            <div class="col-4 text-center">
                                <form class="text-secondary" action="{{route('basket.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value="{{$autumn->id}}" disabled>
                                </form>
                                <a href="">
                                <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$autumn->img_path)}}" alt="">
                                <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$autumn->name}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="winter" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p class="text-secondary Montserrat" style="font-size: 30px;">
                            Зимняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $winters = \App\Cloth::where('season_id',3)->get();
                        ?>
                            @if($winters->count() == 0)
                                <div class="text-center col-12">
                                    <p class="text-secondary Montserrat" style="font-size: 20px;">
                                        Каталог пуст
                                    </p>
                                </div>
                            @endif
                        @foreach($winters as $winter)
                            <div class="col-4 text-center">
                                <a href="">
                                <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$winter->img_path)}}" alt="">
                                <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$winter->name}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="spring" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p class="text-secondary Montserrat" style="font-size: 30px;">
                            Весенняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $springs = \App\Cloth::where('season_id',2)->get();
                        ?>
                        {{--@dd()--}}
                        @if($springs->count() == 0)
                                <div class="text-center col-12">
                                    <p class="text-secondary Montserrat" style="font-size: 20px;">
                                        Каталог пуст
                                    </p>
                                </div>
                            @endif
                        @foreach($springs as $spring)
                            <div class="col-4 text-center">
                                <a href="">
                                <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$spring->img_path)}}" alt="">
                                <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$spring->name}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection