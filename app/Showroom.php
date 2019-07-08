<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $fillable = ['name','category_id','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
