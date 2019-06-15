<?php

namespace App\Http\Controllers;

use App\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        return view('parameter.list');
    }

    public function admin()
    {
        return view('admin.tables.parameter_index');
    }

    public function create()
    {
        return view('parameter.create');
    }

    public function store(Request $request)
    {
        $parameter = new Parameter();
        $parameter->name = $request->name;

        if($file = $request->file('img_path')){
            $name = 'parameter_img'.$parameter->id.$file->getClientOriginalName();
            if ($file->move('uploads', $name))
            {
                $parameter->img_path = mb_strtolower($name);
                $parameter->save();
            }
        }

        $parameter->save();

        return redirect()->route('parameter.create');
    }
}
