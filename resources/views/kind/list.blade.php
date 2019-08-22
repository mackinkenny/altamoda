@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/studio_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-md-5 py-0">
            <div class="col-4 py-md-5 py-0 my-5">
                <div class="text-center py-5">
                    <span class="display-4 font-weight-bold Montserrat" style="font-size: 60px;color: #ffffff;text-align: center;font-weight:700;font-style:normal">Ателье</span>
                </div>
            </div>
        </div>
    </div>
<?php

    $i = 1;
?>
    <div class="p-md-5 p-3 m-md-5 m-0">
        <div class="row">
            @foreach($kinds as $kind)

            @if($i === 1)
            <div data-aos="fade-up" class="col-md-4 col-12 px-4 my-md-0 my-2 season-effect">
                <div class="row justify-content-center p-md-5 p-0" style="background-image: url({{asset('uploads/'.$kind->img_path)}}); background-size: cover; background-position: center; ">
                    <div class="p-md-5 p-0 my-md-5 my-5 text-center">
                        <div class="pt-5 mt-5">
                            <p class="h2 px-5 pt-md-5 pt-0 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight: 700;font-style:normal">
                                {{ $kind->name }}
                            </p>
                        </div>
                        <div class="mb-5 pb-5">
                            <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kind->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                        </div>
                    </div>
                </div>
            </div>
                @endif
                @if($i === 2)
            <div class="col-md-8 col-12">
                <div class="row">
                    <div data-aos="fade-up" class="col-md-6 col-12 px-md-4 px-4 my-md-0 my-2 season-effect">
                        <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kind->img_path)}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                    {{ $kind->name }}
                                </p>
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kind->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>
                    @if(isset($kinds[$loop->index + 1]))
                    <div data-aos="fade-up" class="col-md-6 col-12 px-md-4 px-4 my-md-0 my-2 season-effect">
                        <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kinds[$loop->index + 1]->img_path)}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                    {{ $kinds[$loop->index + 1]->name }}
                                </p>
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kinds[$loop->index + 1]->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>
                        @endif
                </div>
                @if(isset($kinds[$loop->index + 2]))
                <div data-aos="fade-up" class="col-12 py-md-4 py-0 px-md-2 px-2 my-md-0 my-2 season-effect">
                    <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kinds[$loop->index + 2]->img_path)}}); background-size: cover; background-position: center; ">
                        <div class="p-5 mb-5 text-center">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                {{ $kinds[$loop->index + 2]->name }}
                            </p>
                            <div class="p-3">
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kinds[$loop->index + 2]->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
            @endif
            @if($i === 5)
            <div class="col-md-8 col-12">
                <div class="row">
                    <div data-aos="fade-up" class="col-md-6 px-md-4 px-4 my-md-0 my-2 season-effect">
                        <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kind->img_path)}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                   {{ $kind->name }}
                                </p>
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kind->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>

                    @if(isset($kinds[$loop->index + 1]))
                    <div data-aos="fade-up" class="col-md-6 px-md-4 px-4 my-md-0 my-2 season-effect">
                        <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kinds[$loop->index + 1]->img_path)}}); background-size: cover; background-position: center; ">
                            <div class="p-5 mb-5 text-center">
                                <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                    {{ $kinds[$loop->index + 1]->name }}
                                </p>
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kinds[$loop->index + 1]->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @if(isset($kinds[$loop->index + 2]))
                <div data-aos="fade-up" class="col-12 py-md-4 py-0 px-2 my-md-0 my-2 season-effect">
                    <div class="row justify-content-center" style="background-image: url({{asset('uploads/'.$kinds[$loop->index + 2]->img_path)}}); background-size: cover; background-position: center; ">
                        <div class="p-5 mb-5 text-center">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight:400;font-style:normal">
                                {{ $kinds[$loop->index + 2]->name }}
                            </p>
                            <div class="p-3">
                                <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kinds[$loop->index + 2]->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
                @endif
            @if($i === 8)
            <div data-aos="fade-up" class="col-md-4 col-12 px-md-4 px-4 my-md-0 my-2 season-effect">
                <div class="row justify-content-center p-md-5 p-0" style="background-image: url({{asset('uploads/'.$kind->img_path)}}); background-size: cover; background-position: center; ">
                    <div class="p-md-5 p-0 my-md-5 my-0 text-center">
                        <div class="pt-5 mt-5">
                            <p class="h2 px-5 pt-5 pb-4 font-weight-bold Montserrat" style="color: #ffffff;text-align: center;font-weight: 700;font-style:normal">
                                {{ $kind->name }}
                            </p>
                        </div>
                        <div class="mb-5 pb-5">
                            <a class="px-4 py-2 bg-dark" data-toggle="modal" data-target="#cloth_pick-{{$kind->id}}" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Выбрать</a>
                        </div>
                    </div>
                </div>
            </div>
                @endif
        <?php
                    $i = $i + 1;
                    if($i === 9)
                        {
                            $i = 1;
                        }
                ?>
                @endforeach
        </div>
    </div>

    @foreach($kinds as $kind)
    @include('modals.cloth_pick_modal')
@endforeach
@endsection