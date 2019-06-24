<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }

    public function admin()
    {
        return view('admin.tables.category_index');
    }


    public function store(Request $request)
    {

        $category = new Category();

        $category->name = $request->name;

        if($file = $request->file('img_path')){
            $name = 'category_img'.$category->id.$file->getClientOriginalName();
            if ($file->move('uploads', $name))
            {
                $category->img_path = mb_strtolower($name);
                $category->save();
            }
        }
        return redirect()->route('category.create');
    }
}
