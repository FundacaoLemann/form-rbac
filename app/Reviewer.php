<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    //
    protected $fillable = [
    'id',
    'name',
    'email',
    'password',
    'state'
    ];

}
