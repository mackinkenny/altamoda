<?php

namespace App\Http\Controllers;

use App\Category;
use App\Showroom;
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

    public function create()
    {
        $categoryes = Category::all();
        return view('showroom.create',['categoryes' => $categoryes]);
    }

    public function store(Request $request)
    {
        $showroom = Showroom::create($request->all());

        if($file = $request->file('img_path')){
            $name = 'showroom_img'.$showroom->id.$file->getClientOriginalName();
            if ($file->move('uploads', $name))
            {
                $showroom->img_path = mb_strtolower($name);
                $showroom->save();
            }
        }

        return redirect()->route('showroom.create');
    }

    public function catalog($id)
    {
        $category = Category::find($id);
        $showrooms = $category->showrooms;

        return view('showroom.catalog',['category' => $category, 'showrooms' => $showrooms]);
    }
}
