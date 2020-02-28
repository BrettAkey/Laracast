<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title', 'body'];

    public function getRouteKeyName()
    {
        return 'title';
    }
}


