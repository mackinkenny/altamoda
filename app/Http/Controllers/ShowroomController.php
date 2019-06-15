<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    //
    public function index()
    {
        return view('showroom.list');
    }

    public function admin()
    {
        return view('admin.tables.showroom_index');
    }
}
