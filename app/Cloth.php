<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $fillable = ['name','type','description'];


    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function kinds()
    {
        return $this->belongsToMany(Kind::class);
    }
}
