<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'nome',
        'link',
        'tipo',
        'inicio_mes',
        'inicio_ano',
    ];

}
