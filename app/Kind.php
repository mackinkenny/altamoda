<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kind extends Model
{
    //

    public function parameters()
    {
        return $this->belongsToMany(Parameter::class);
    }

    public function clothes()
    {
        return $this->belongsToMany(Cloth::class);
    }
}
