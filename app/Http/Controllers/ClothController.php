<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    //
    public function index()
    {
        return view('admin.tables.cloth_index');
    }

    public function create()
    {
        return view('cloth.create');
    }

    public function store(Request $request)
    {
        $cloth = Cloth::create($request->all());
//        $filename = time().'.'.request()->img_path->getClientOriginalExtension();
//        request()->img_path->move(public_path('uploads/clothes'), $filename);
//
//        $cloth->img_path=$filename;
//        $cloth->save();

        return redirect()->route('cloth.index');
    }

    public function show()
    {
    }

    public function catalog()
    {
        $clothes = Cloth::all();

        return view('cloth.catalog',['clothes' => $clothes]);
    }
}
