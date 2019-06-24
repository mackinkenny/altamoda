<?php

namespace App\Http\Controllers;

use App\Cloth;
use App\Kind;
use App\Parameter;
use Illuminate\Http\Request;

class KindController extends Controller
{
    public function index()
    {
        $kinds = Kind::all();
        return view('kind.list',['kinds' => $kinds]);
    }

    public function admin()
    {
        return view('admin.tables.kind_index');
    }

    public function create()
    {
        return view('kind.create', [
            'parameters' => Parameter::all(),
            'clothes' => Cloth::all()
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->parameters);
        $kind = new Kind();
        $kind->name = $request->name;

        if($file = $request->file('img_path')){
            $name = 'kind_img'.$kind->id.$file->getClientOriginalName();
            if ($file->move('uploads', $name))
            {
                $kind->img_path = mb_strtolower($name);
                $kind->save();
            }
        }

        $kind->save();

        if ($request->parameters) {

            $kind->parameters()->sync($request->parameters);
        }

        if ($request->clothes) {
            $kind->clothes()->sync($request->clothes);
        }

        return redirect()->route('kind.create');
    }
}
