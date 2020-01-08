<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Reviewer extends Model
{

    protected $table = 'reviewers';

    protected $fillable = [
    'id',
    'name',
    'email',
    'password',
    'state',
    'status'
    ];


    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

}
