<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public function kinds()
    {
        return $this->belongsToMany(Kind::class);
    }
}
