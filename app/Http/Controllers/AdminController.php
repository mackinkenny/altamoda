<?php

namespace App\Http\Controllers;

use App\Cloth;
use App\Kind;
use App\Parameter;
use App\Showroom;
use Illuminate\Http\Request;
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
                        <a href="'.route('cloth.destroy', $model->id).'" data-model="cloth" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function getKinds()
    {
        $kinds = Kind::query();

        return DataTables::of($kinds)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('kind.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('kind.destroy', $model->id).'" data-model="kind" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function getParameters()
    {
        $parameters = Parameter::query();

        return DataTables::of($parameters)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('parameter.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('parameter.destroy', $model->id).'" data-model="parameter" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function getShowrooms()
    {
        $showrooms = Showroom::query();

        return DataTables::of($showrooms)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('showroom.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('showroom.destroy', $model->id).'" data-model="showroom" data-id="'.$model->id.'" onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }
    
}
