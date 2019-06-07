@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 position-relative" style="background-image: url('{{ asset('/images/image.jpg') }}'); background-size: cover; background-position: center right">
        <div class="backdrop"></div>
        <div class="row py-5 py-md-5 justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 py-5 text-center" style="padding:250px!important;">
                <img src="{{asset('/images/2.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row p-5">
            <div class="col-6 p-5">
                <p>#Дом тканей</p>
                <h2 class="" style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">ALTA MODA</h2>
                <p class="h2" style="font-size: 15px;color: #050505;line-height: 22px;text-align: left; font-family: 'Montserrat'; font-weight:400;font-style:normal">
                    Создавая NUMI, нашей главной целью было качество, индивидуальность и эстетика, на чем мы не перестанем делать акцент.
                </p>
                <p class="h2" style="font-size: 15px;color: #050505;line-height: 22px;text-align: left; font-family:'Montserrat'; font-weight:400;font-style:normal">
                    Покупая то или иное изделие, Вы покупаете не только платье, юбку, или блузу, Вы покупаете право на эксклюзивность, право на самовыражение,индивидуальность и, конечно, качество.
                </p>
            </div>
            <div class="col-6 text-right">
                <img src="{{asset('/images/1.jpg')}}" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <span style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">
                    ПОЧЕМУ
                </span>
                <br>
                <span class="ml-5" style="display: inline-block; color: black; font-family: sfblack; font-size: 50px; line-height: 58px; letter-spacing: 3px;">
                    ALTA MODA
                </span>
            </div>
            <div class="col-6">
                <p style="font-size: 15px;color: #050505;line-height: 22px;text-align: left;font-family:Montserrat;font-weight:400;font-style:normal">
                    NUMI - это брэнд, где каждое изделие было кропотливо отработано вплоть до каждой малейшей детали, где мы начинали все заново, если изделие выглядело на все 99, а не на 100. NUMI - это брэнд, где каждое изделие лишь в единственном экземпляре и на всю жизнь! #numibyaltamoda
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 p-5">
                <div style="background-image: url({{asset('/images/3.png')}}) 100% 100% no-repeat;">

                </div>
            </div>
            <div class="col-6 p-5"></div>
        </div>
    </div>
@endsection
