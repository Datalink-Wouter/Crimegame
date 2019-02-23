<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    public function user()
    {
        $this->belongsTo('App\Models\User');
    }
}
