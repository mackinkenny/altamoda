<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }
}
