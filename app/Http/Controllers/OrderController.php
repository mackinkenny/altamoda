<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Basket;
use App\Cloth;
use App\Mail\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $token = request()->session()->token();
        $basket = Basket::where('user_tok', $token)->get();
        $price = 0;
        if (count($basket) == 0) {
            return redirect()->back();
        }
        foreach ($basket as $item) {
            $cloth = Cloth::find($item->cloth_id)->price;
            $price = $price + $cloth;
        }
        $data = [
            'baskets' => $basket,
            'count' => count($basket),
            'total' => $price,
        ];
        return view('order.index', $data);
    }

    public function store(Request $request)
    {
        $clientId = "170000005";        //Берется из файлика Тестовый Виртуальный ПОС Merchant Id
        $amount = $request->input('amount');                    //Сумма транзакции Transaction amount
        $oid = rand(100000, 9999999);                        //Номер продажи, если пусто, то будет сгенерированно автоматически Order Id. Must be unique. If left blank, system will generate a unique one.
        $okUrl = "http://altamoda.loc:8888/api/order/success";    //ССЫЛКА для возврата неуспешного платежа  URL which client be redirected if authentication is successful
        $failUrl = "http://altamoda.loc:8888/api/order/fail";    //ССЫЛКА для возврата успешного платежа URL which client be redirected if authentication is not successful
        $rnd = microtime();                //A random number, such as date/time
        $currencyVal = "417";            //Код валюты у нас только сомы поэтому 417  Currency code
        $storekey = "KYRGYZ17";        //Берется из файлика Тестовый Виртуальный ПОС Store key value, defined by bank.
        $storetype = "3d_Pay_Hosting";    //Тип операции в нашем случае ставим 3d_pay_hosting   3D authentication model
        $lang = "ru";                    //Языковые настройки   Language parameter, "en" for English
        $instalment = "";                //Рассрочка Instalment count, if there's no instalment should left blank //Ну доступно/Not valid
        $transactionType = "Auth";        //Тип транзакции в нашем случае auth transaction type
        $hashstr = $clientId . $oid . $amount . $okUrl . $failUrl . $transactionType . $instalment . $rnd . $storekey;
        $hash = base64_encode(pack('H*', sha1($hashstr)));

        $bank = new Bank(); //save to db
        $bank->first_name = $request->input('first_name');
        $bank->last_name = $request->input('last_name');
        $bank->email = $request->input('email');
        $bank->phone = $request->input('phone');
        $bank->address = $request->input('address');
        $bank->amount = $request->input('amount');
        $bank->oid = $oid;
        $bank->save();

        $token = request()->session()->token();
        $basket = Basket::where('user_tok', $token)->get();
        foreach ($basket as $item) {
            $item->delete();
        }

        $data = [
            'clientId' => $clientId,
            'amount' => $amount,
            'oid' => $oid,
            'okUrl' => $okUrl,
            'failUrl' => $failUrl,
            'rnd' => $rnd,
            'currencyVal' => $currencyVal,
            'storetype' => $storetype,
            'lang' => $lang,
            'instalment' => $instalment,
            'transactionType' => $transactionType,
            'hash' => $hash,
        ];

        return view('order.redirect', $data);
    }

    public function backUrl(Request $request)
    {
        $data = $_POST;
        $bank = Bank::where('oid', $data['ReturnOid'])->first();
        Mail::to($bank->email)->send(new Order($data['TransId'], $data['ReturnOid'], $data['amount'],
            $data['EXTRA_CARDBRAND'], $data['maskedCreditCard'], $data['AuthCode'], $data['EXTRA_TRXDATE']));
        return redirect()->route('index.page');
    }

    public function failUrl(Request $request)
    {
        $errors = fopen("fail.txr", "w");
        $post = $request['POST'];
        fwrite($errors, $post);
        fclose();
        return redirect()->route('index.page');
    }
}
