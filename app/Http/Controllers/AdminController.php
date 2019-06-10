<?php

namespace App\Http\Controllers;

use App\Cloth;
use App\Studio;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    //

    public function getClothes()
    {
        $clothes = Cloth::query();

        return DataTables::of($clothes)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('cloth.show', $model->id).'" class="btn btn-sm btn-secondary"><i class="fas fa-info"></i> Show </a>
                        <a href="'.route('cloth.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('cloth.destroy', $model->id).'" data-model="doctor" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function getStudios()
    {
        $studios = Studio::query();

        return DataTables::of($studios)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('studio.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('studio.destroy', $model->id).'" data-model="branch" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }
}
