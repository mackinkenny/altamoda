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
        dd(request()->ip());
        $basket = New Basket();
        $basket->user_ip = request()->ip();
        $basket->kind_id = $request->kind_id;
        $basket->cloth_id = $request->cloth_id;
        $parameters = Kind::find($basket->kind_id)->parameters;

            $request->merge([
                'parameters' => [
                    'шея' => $request->get(0),
                ]
            ]);

        $basket->save();

        return back();
    }
}
