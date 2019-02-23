<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cash', 'xp'
    ];

    public function user()
    {
        $this->belongsTo('App\Models\User');
    }

    public function getCashAttribute($value)
    {
        return AddCurrency($value);
    }

    public function getBankAttribute($value)
    {
        return AddCurrency($value);
    }
}
