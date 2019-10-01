@extends('layouts.app')

@section('content')

    <div
        style="background-image: url({{asset('images/studio_main.png')}}); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100 py-md-5 py-0">
            <div class="col-4 py-md-5 py-0 my-5">
                <div class="text-center py-5">
                    <span class="display-4 font-weight-bold"
                          style="color: #ffffff;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal">ВОЗВРАТ И ОБМЕН</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <h2 data-aos="fade-up" class="font-weight-bold Montserrat mb-4">ВОЗВРАТ И ОБМЕН</h2>
            <div class="col-12">
                <p>Возврат и обмен товара осуществляется в течение 14 дней с момента получения заказа при сохранении
                    надлежащего качества и товарного вида изделий, полной комплектации, а также при предъявлении
                    документа, подтверждающего покупку. В противном случае товар возврату и обмену
                    не подлежит.
                    Возврат и обмен товара по инициативе покупателя осуществляется за счет покупателя. Возврат и обмен
                    товара при обнаружении производственного брака осуществляется за счет продавца. Возврат и обмен
                    товара осуществляется через транспортную компанию.
                </p>
                <h4>ВОЗВРАТ НЕОБХОДИМО ОТПРАВИТЬ ПО АДРЕСУ:</h4>
                <p>
                    603005, г. Бишкек, ул. Медерова 51 <br>
                    ДОМ ТКАНИ ALTA MODA <br>
                    Возврат денежных средств на банковскую карту поступает <br>
                    от 3х до 14 дней, в соответствии, с правилами Вашего банка.
                </p>
            </div>
        </div>
    </div>

@endsection
