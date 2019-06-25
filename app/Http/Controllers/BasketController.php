<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Kind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    //
    public function store(Request $request)
    {

            $basket = New Basket();
            $basket->user_tok = request()->session()->token();
            $basket->kind_id = $request->kind_id;
            $basket->cloth_id = $request->cloth_id;
            $basket->parameters = $request->parameters;

            $basket->save();

            return back();
    }
}
