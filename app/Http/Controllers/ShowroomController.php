<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    //
    public function index()
    {
        $categoryes = Category::all();
        return view('showroom.list',['categoryes' => $categoryes]);
    }

    public function admin()
    {
        return view('admin.tables.showroom_index');
    }
}
