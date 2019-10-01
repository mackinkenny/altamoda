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

        $baskets = Basket::all();
        foreach ($baskets as $basket)
        {
            if (\Carbon\Carbon::make($basket->created_at)->format('Y-m-d') < date('Y-m-d'))
            {
                $basket->delete();
            }
        }

        return back();
    }

    public function clothbasket($id)
    {
        $basket = new Basket();
        $basket->user_tok = request()->session()->token();
        $basket->cloth_tip = $id;
        $basket->cloth_id = $id;
        $basket->save();

        return back();
    }

    public function showroombasket($id)
    {
        $basket = new Basket();
        $basket->user_tok = request()->session()->token();
        $basket->showroom_id = $id;
        $basket->save();

        return back();
    }

    public function delete($id)
    {
        $basket = Basket::find($id);
        $basket->delete();
        return response()->json("success");
    }
}
