@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-6">
                <p class="display-3 text-secondary">
                    {{$clothes->first()->type}}
                </p>
                <div class="">
                    <a class="text-secondary" href="/">Главная</a>
                    <i class="mx-4 text-secondary fa fa-angle-right"></i>
                    <a class="text-secondary" href="{{asset('/clothes')}}">Ткани</a>
                    <i class="mx-4 text-secondary fa fa-angle-right"></i>
                    <span class="text-secondary"    >{{$clothes->first()->type}}</span>
                </div>
            </div>
        </div>
        <hr>

        <div class="col-3">
            <p class="text-secondary h3">
                Каталог тканей
            </p>
            <p>
            <a class="text-secondary" href="">Лето</a>
            </p>
            <p>
            <a class="text-secondary" href="">Весна</a>
            </p>
            <p>
            <a class="text-secondary" href="">Зима</a>
            </p>
            <p>
            <a class="text-secondary" href="">Осень</a>
            </p>
        </div>
    </div>

@endsection