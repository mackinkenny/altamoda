@extends('layouts.app')
@section('content')
    @push('styles')
        <style>
            .frs-menu {
                display: none !important;
            }

            .ext-menu {
                display: block !important;
            }
        </style>
    @endpush
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-6">
                <p data-aos="fade-up" class="display-3 text-secondary mb-5">
                    Ткани
                </p>
                <div data-aos="fade-up" class="">
                    <a class="text-secondary Montserrat" href="/">Главная</a>
                    <i class="mx-4 text-secondary fa fa-angle-right"></i>
                    <a class="text-secondary Montserrat" href="{{ route('cloth.index') }}">Ткани</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div data-aos="fade-up" class="col-3 my-5">
                <p class="text-secondary h3">
                    Каталог тканей
                </p>
                <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark active" style="font-size: 16px;" id="" data-toggle="tab"
                           href="#summer" role="tab" aria-controls="" aria-selected="true">Лето</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab"
                           href="#autumn" role="tab" aria-controls="" aria-selected="true">Осень</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab"
                           href="#winter" role="tab" aria-controls="" aria-selected="true">Зима</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab"
                           href="#spring" role="tab" aria-controls="" aria-selected="true">Весна</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-9" id="myTabContent">
                <div class="tab-pane active show" style="min-height: 100vh;" id="summer" role="tabpanel"
                     aria-labelledby="">
                    <div class="text-center">
                        <p data-aos="fade-up" class="text-secondary Montserrat" style="font-size: 30px;">
                            Летняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $summers = \App\Cloth::where('season_id', 1)->get();
                        ?>
                        @if($summers->count() == 0)
                            <div data-aos="fade-up" class="text-center col-12">
                                <p class="text-secondary Montserrat" style="font-size: 20px;">
                                    Каталог пуст
                                </p>
                            </div>
                        @endif
                        @foreach($summers as $summer)

                            <div data-aos="fade-up" class="col-4 text-center p-3 mb-3">
                                <div class="season-effect px-2"
                                     style="padding: 45% 0px; background-image: url({{ asset('uploads/'.$summer->img_path) }}); background-size: cover; width: 230px; height:230px; border-radius:20px;">
                                    <button onclick="saveToCart({{ $summer->id }})" id="saveButton{{ $summer->id }}"
                                            class="px-4 py-2 bg-dark but"
                                            style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;">
                                        В корзину
                                    </button>
                                </div>
                                <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$summer->name}}</p>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="autumn" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p data-aos="fade-up" class="text-secondary Montserrat" style="font-size: 30px;">
                            Осенняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $autumns = \App\Cloth::where('season_id', 4)->get();
                        ?>
                        @if($autumns->count() == 0)
                            <div data-aos="fade-up" class="text-center col-12">
                                <p class="text-secondary Montserrat" style="font-size: 20px;">
                                    Каталог пуст
                                </p>
                            </div>
                        @endif
                        @foreach($autumns as $autumn)
                            <div data-aos="fade-up" class="col-4 text-center p-3 mb-3">
                                <div class="season-effect px-2"
                                     style="padding: 45% 0px; background-image: url({{ asset('uploads/'.$autumn->img_path) }}); background-size: cover; width: 230px; height:230px; border-radius:20px;">
                                    <a class="px-4 py-2 bg-dark but" href="{{ asset('clothbasket/'.$autumn->id) }}"
                                       style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;">
                                        Добавить в корзину
                                    </a>>
                                </div>
                                <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$autumn->name}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="winter" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p data-aos="fade-up" class="text-secondary Montserrat" style="font-size: 30px;">
                            Зимняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $winters = \App\Cloth::where('season_id', 3)->get();
                        ?>
                        @if($winters->count() == 0)
                            <div data-aos="fade-up" class="text-center col-12">
                                <p class="text-secondary Montserrat" style="font-size: 20px;">
                                    Каталог пуст
                                </p>
                            </div>
                        @endif
                        @foreach($winters as $winter)
                            <div data-aos="fade-up" class="col-4 text-center p-3 mb-3">
                                <div class="season-effect px-2"
                                     style="padding: 45% 0px; background-image: url({{ asset('uploads/'.$winter->img_path) }}); background-size: cover; width: 230px; height:230px; border-radius:20px;">
                                    <a class="px-4 py-2 bg-dark but" href="{{ asset('clothbasket/'.$winter->id) }}"
                                       style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;">
                                        Добавить в корзину
                                    </a>>
                                </div>
                                <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$winter->name}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" style="min-height: 100vh;" id="spring" role="tabpanel" aria-labelledby="">
                    <div class="text-center">
                        <p data-aos="fade-up" class="text-secondary Montserrat" style="font-size: 30px;">
                            Весенняя ткань
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <?php
                        $springs = \App\Cloth::where('season_id', 2)->get();
                        ?>
                        {{--@dd()--}}
                        @if($springs->count() == 0)
                            <div data-aos="fade-up" class="text-center col-12">
                                <p class="text-secondary Montserrat" style="font-size: 20px;">
                                    Каталог пуст
                                </p>
                            </div>
                        @endif
                        @foreach($springs as $spring)
                            <div data-aos="fade-up" class="col-4 text-center p-3 mb-3">
                                <div class="season-effect px-2"
                                     style="padding: 45% 0px; background-image: url({{ asset('uploads/'.$spring->img_path) }}); background-size: cover; width: 230px; height:230px; border-radius:20px;">
                                    <a class="px-4 py-2 bg-dark but" href="{{ asset('clothbasket/'.$spring->id) }}"
                                       style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;">
                                        Добавить в корзину
                                    </a>>
                                </div>
                                <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$spring->name}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
