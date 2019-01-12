<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTimer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crime'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
