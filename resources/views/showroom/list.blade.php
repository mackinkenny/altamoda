@extends('layouts.app')

@section('content')

    <div style="background-image: url({{asset('images/showroom_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-md-5 py-0">
            <div class="col-4 py-md-5 py-0 my-5">
                <div class="text-center py-5">
                    <span class="display-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">Шоурум</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mt-5">
            <?php $k = 1 ?>
            @foreach($categoryes as $category)
                @if($k == 1)
            <div class="col-12 px-4 pt-2" >
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/uploads/'. $category->img_path)}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            {{ $category->name }}
                        </p>
                        <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>
                @elseif($k == 2)
            <div class="col-md-6 col-12 p-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/uploads/'. $category->img_path)}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            {{ $category->name }}
                        </p>
                        <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>
                @elseif($k == 3)
            <div class="col-md-6 col-12 p-4">
                <div class="row justify-content-center p-5" style="background-image: url({{asset('/uploads/'. $category->img_path)}}); background-size: cover; background-position: center; ">
                    <div class="p-5 mb-5 text-center">
                        <p class="h2 px-5 pt-5 pb-4 font-weight-bold" style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:400;font-style:normal">
                            {{ $category->name }}
                        </p>
                        <a class="px-4 py-2 bg-dark" href="" style="text-decoration: none; color: white; font-weight: lighter; letter-spacing: 2px;" >Смотреть</a>
                    </div>
                </div>
            </div>
                @endif
                    <?php
                    $k = $k + 1;
                    if ($k === 4) {
                        $k = 1;
                    }
                    ?>
            @endforeach
        </div>
    </div>

@endsection