<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Date;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'date_of_birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function timers()
    {
        return $this->hasOne('App\UserTimer');
    }

    public function canPerformCrime()
    {
        if (Date::parse(Auth::user()->timers->crime.' +'.env('COOLDOWN_CRIME').' seconds') > Date::now() and !is_null(Auth::user()->timers->crime)) {
            return false;
        } else {
            return true;
        }
    }

    public function getCrimeTime()
    {
        $wait_untill = Date::parse(Auth::user()->timers->crime.' +'.env('COOLDOWN_CRIME').' seconds');
        $now = Date::now();
        $diff = Date::parse($wait_untill)->diffForHumans($now);

        return $diff;
    }
}
