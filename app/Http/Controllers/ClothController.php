<?php

namespace App\Http\Controllers;

use App\Cloth;
use App\Season;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ClothController extends Controller
{
    //
    public function index()
    {
        $seasons = Season::all();

        return view('cloth.list',['seasons' => $seasons]);
    }

    public function admin()
    {
        return view('admin.tables.cloth_index');
    }

    public function create()
    {
        $seasons = Season::all();

        return view('cloth.create',['seasons' => $seasons]);
    }

    public function store(Request $request)
    {
        $cloth = Cloth::create($request->all());

        $cloth->season_id = $request->type;

        if($file = $request->file('img_path')){
            $name = 'cloth_img'.$cloth->id.$file->getClientOriginalName();
             if ($file->move('uploads', $name))
             {
                 $cloth->img_path = mb_strtolower($name);
                 $cloth->save();
             }
        }

        return redirect()->route('cloth.create');
    }

    public function show()
    {
    }

    public function destroy(Cloth $cloth)
    {
        $cloth->delete();
        return redirect()->back();
    }

    public function catalog($id)
    {
        $season = Season::find($id);
        $clothes = $season->clothes;

        return view('cloth.catalog',['season' => $season, 'clothes' => $clothes]);
    }
}
