<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getDelivery(Request $request)
    {
        return view('pages.delivery');
    }

    public function getChange(Request $request)
    {
        return view('pages.change');
    }
}
