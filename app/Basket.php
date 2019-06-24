<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    //
    protected $table = 'parameters';

    protected $fillable = [
        'user_ip', 'kind_id', 'cloth_id', 'parameters'
    ];

    protected $casts = [
        'parameters' => 'array',
    ];
}
