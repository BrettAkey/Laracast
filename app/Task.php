<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function complete()
    {
        $this->completed_at = Carbon::now();
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
