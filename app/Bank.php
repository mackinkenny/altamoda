<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'amount', 'oid'];

}
