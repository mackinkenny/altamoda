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
        <link href="{{ asset('css/spinner.css') }}" rel="stylesheet">
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

                        </p>
                    </div>
                    <div class="container-fluid row">
                        <div class="loader" id="loader-4">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <form method="post" action="https://entegrasyon.asseco-see.com.tr/fim/est3Dgate" id="redirectForm">
                            <input type="hidden" name="clientid" value="{{ $clientId }}"/>
                            <input type="hidden" name="amount" value="{{ $amount}}"/>
                            <input type="hidden" name="islemtipi" value="{{ $transactionType  }}"/>
                            <input type="hidden" name="taksit" value="{{ $instalment  }}"/>
                            <input type="hidden" name="oid" value="{{ $oid  }}"/>
                            <input type="hidden" name="okUrl" value="{{ $okUrl  }}"/>
                            <input type="hidden" name="failUrl" value="{{ $failUrl  }}"/>
                            <input type="hidden" name="rnd" value="{{ $rnd  }}"/>
                            <input type="hidden" name="hash" value="{{ $hash  }}"/>
                            <input type="hidden" name="storetype" value="{{ $storetype  }}"/>
                            <input type="hidden" name="lang" value="{{ $lang }}"/>
                            <input type="hidden" name="currency" value="{{ $currencyVal }}"/>
                            <input type="hidden" name="refreshtime" value="0"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        $(document).ready(function () {
            console.log("error");
            $("#redirectForm").submit();
        });
    </script>
@endpush
