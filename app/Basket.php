<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    //
    protected $table = 'baskets';

    protected $fillable = [
        'user_tok', 'kind_id', 'cloth_id', 'parameters'
    ];

    protected $casts = [
        'parameters' => 'array',
    ];
}
