<?php

namespace App\Http\Controllers;

use App\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
//    public function index()
//    {
//        return view('cloth.list');
//    }

    public function create()
    {
        return view('season.create');
    }

    public function store(Request $request)
    {

        $season = new Season();

        $season->name = $request->name;

        if($file = $request->file('img_path')){
            $name = 'season_img'.$season->id.$file->getClientOriginalName();
            if ($file->move('uploads', $name))
            {
                $season->img_path = mb_strtolower($name);
                $season->save();
            }
        }
        return redirect()->route('season.create');
    }
}
