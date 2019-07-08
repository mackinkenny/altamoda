@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-6">
                <p class="display-3 text-secondary mb-5">
                    Шоурум
                </p>
                <div class="">
                    <a class="text-secondary Montserrat" href="/">Главная</a>
                    <i class="mx-4 text-secondary fa fa-angle-right"></i>
                    <a class="text-secondary Montserrat" href="{{ route('showroom.index') }}">Шоурум</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3 my-5">
                <p class="text-secondary h3">
                    Каталог вещей
                </p>
                <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark active" style="font-size: 16px;" id="" data-toggle="tab" href="#women" role="tab" aria-controls="" aria-selected="true">Женская одежда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab" href="#men" role="tab" aria-controls="" aria-selected="true">Мужская одежда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Montserrat text-dark" style="font-size: 16px;" id="" data-toggle="tab" href="#child" role="tab" aria-controls="" aria-selected="true">Детская одежда</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content col-9" id="myTabContent">
                <div class="text-center">
                    <p class="text-secondary Montserrat" style="font-size: 30px;">
                        Женская одежда
                    </p>
                </div>
                <div class="tab-pane active show" id="women" role="tabpanel" aria-labelledby="">
                    <div class="container-fluid row">
<!--                        --><?php
                        $womens = \App\Showroom::where('category_id',1)->get();
//                        ?>
                        @foreach($womens as $women)
                            <div class="col-4 text-center p-3 mb-3 season-effect">
                                <div class="py-5" style="background-image: url('{{asset('uploads/'.$women->img_path)}}')">
                                {{--<img class="w-100" style="height:230px; width:230px;border-radius:20px;" src="{{asset('uploads/'.$women->img_path)}}" alt="">--}}
                                <p class="mt-2 text-secondary Montserrat" style="font-size:20px;">{{$women->name}}</p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="men" role="tabpanel" aria-labelledby="">
                    <div class="container-fluid row">
                        <?php
                        $mens = \App\Showroom::where('category_id',2)->get();
                        ?>
                        @foreach($mens as $men)
                            <div class="col-4 text-center">
                                <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$men->img_path)}}" alt="">
                                <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$men->name}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="child" role="tabpanel" aria-labelledby="">
                    <div class="container-fluid row">
                        <?php
                        $childs = \App\Showroom::where('category_id',3)->get();
                        ?>
                        @foreach($childs as $child)
                            <div class="col-4 text-center">
                                <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$child->img_path)}}" alt="">
                                <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$child->name}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection