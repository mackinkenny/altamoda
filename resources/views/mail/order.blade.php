<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        .text-danger strong {
            color: #9f181c;
        }

        .receipt-main {
            background: #ffffff none repeat scroll 0 0;
            border-bottom: 12px solid #333333;
            border-top: 12px solid #9f181c;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 40px 30px !important;
            position: relative;
            box-shadow: 0 1px 21px #acacac;
            color: #333333;
            font-family: open sans;
            width: 40%;
        }

        .receipt-main p {
            color: #333333;
            font-family: open sans;
            line-height: 1.42857;
        }

        .receipt-footer h1 {
            font-size: 15px;
            font-weight: 400 !important;
            margin: 0 !important;
        }

        .receipt-main::after {
            background: #414143 none repeat scroll 0 0;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: -13px;
        }

        .receipt-main thead {
            background: #2b94fd none repeat scroll 0 0;
        }

        .receipt-main thead th {
            color: #fff;
        }

        .receipt-right h5 {
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 7px 0;
        }

        .receipt-right p {
            font-size: 12px;
            margin: 0px;
        }

        .receipt-right p i {
            text-align: center;
            width: 18px;
        }

        .receipt-main td {
            padding: 9px 20px !important;
        }

        .receipt-main th {
            padding: 13px 20px !important;
        }

        .receipt-main td {
            font-size: 13px;
            font-weight: initial !important;
        }

        .receipt-main td p:last-child {
            margin: 0;
            padding: 0;
        }

        .receipt-main td h2 {
            font-size: 15px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }

        .receipt-header-mid .receipt-left h1 {
            font-weight: 100;
            margin: 34px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-header-mid {
            margin: 23px 22px;
        }

        #container {
            background-color: #dcdcdc;
        }

        .container {
            padding-right: 15px;
            padding-left: 30px;
            margin-right: auto;
            margin-left: auto;
        }

        table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
            width: 100%;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        tbody > tr > td {
            border: 1px solid #dddddd;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="receipt-header">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="receipt-header receipt-header-mid">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <h5>Компания: ОсОО «Altamoda»</h5>
                            <p>
                                <b>Телефон :</b> +996 555-52-29-99</p>
                            <p>
                                <b>Email :</b> info@altamoda.kg</p>
                            <p>
                                <b>Юридический адрес: </b> г. Бишкек, ул. Медерова 51</p>
                            <p>
                                <b>Дата: {{ $date }}</b>
                            </p>
                            <p>
                                <b>
                                    <a href="altamoda">http://altamoda.kg/</a>
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 45px;">
                        <div class="receipt-left">
                            <h5 style="font-size: 15px;">Информация о платеже</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="info">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Чек: {{ $transId }}</th>
                        <th>Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-9">№ сделки: {{ $number }}</td>
                        <td class="col-md-3">
                            <i class="fa fa-inr"></i>{{ $amount }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <h2>
                                <strong>Итого: </strong>
                            </h2>
                        </td>
                        <td class="text-left text-danger">
                            <h2>
                                <strong>
                                    <i class="fa fa-inr"></i>{{ $amount }} сом</strong>
                            </h2>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Информация об оплате</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-9">Cпособ оплаты</td>
                        <td class="col-md-3">
                            <i class="fa fa-inr"></i>{{ $cardBrand }}
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-6">Номер банковской карты</td>
                        <td class="col-md-6">
                            <i class="fa fa-inr"></i>{{ $card }}
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Код авторизации</td>
                        <td class="col-md-3">
                            <i class="fa fa-inr"></i>{{ $authCode }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <div class="receipt-right">
                            <p>
                                <b>Любые вопросы, связанные с оплаченным вами заказом вы можете задать специалистам
                                    службы поддержки компании
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="receipt-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
