<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


