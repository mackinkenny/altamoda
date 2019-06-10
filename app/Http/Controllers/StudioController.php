<?php

namespace App\Http\Controllers;

use App\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        return view('admin.tables.studio_index');
    }
    public function create()
    {
        return view('studio.create', [
            'studios' => Studio::all(),
        ]);
    }
    public function store(Request $request)
    {
        $studio = new Studio();
        $studio->name = $request->name;

        $studio->save();

        return redirect()->route('studio.index');
    }
}
