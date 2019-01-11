<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTimer extends Model
{
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
