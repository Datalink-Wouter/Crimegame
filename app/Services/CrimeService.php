<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Events\PerformCrime;
use Auth;
use Date;

class CrimeService
{
    public function __construct()
    {
    }

    public function perform(Request $request)
    {
        $request->validate([
            'crime' => 'required'
        ]);

        if (Date::parse(Auth::user()->timers->crime.' +'.env('COOLDOWN_CRIME').' seconds') > Date::now()) {
            alert()->warning('You have to wait');
        } else {
            Auth::user()->timers->update(['crime' => now()]);
            alert()->success('Crime '.$request->crime.' excecuted');
        }
    }
}
