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
                            Оформления заказа
                        </p>
                    </div>
                    <div class="container-fluid row">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Корзина</span>
                                    <span class="badge badge-secondary badge-pill">{{ $count }}</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    @foreach($baskets as $basket)
                                        @if($basket->cloth_tip)
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">{{\App\Cloth::find($basket->cloth_tip)->name}}</h6>
{{--                                                    <small class="text-muted">{{\App\Cloth::find($basket->cloth_tip)->description}}</small>--}}
                                                </div>
                                                <span class="text-muted">{{\App\Cloth::find($basket->cloth_tip)->price}} сом</span>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Итог</span>
                                        <strong>{{ $total }} сом</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 order-md-1">
                                <form action="{{ route('order.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Имя</label>
                                            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Фамилия</label>
                                            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">*</span></label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Телефон <span class="text-muted">*</span></label>
                                        <input type="number" name="phone" class="form-control" id="email" placeholder="996770000000" min="10" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Адрес</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Чуй 1" required>
                                    </div>
                                    <input type="hidden" class="form-control" name="amount" value="{{ $total }}">
                                    <hr class="mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="same-address" required>
                                        <label class="custom-control-label" for="same-address">Принимаю условия оферта</label>
                                    </div>
                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ</button>
                                </form>
                                <br>
                                <div>
                                    <img src="{{ asset('images/sponsor.jpeg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
