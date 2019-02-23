<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Events\PerformCrime;
use Auth;
use App\Models\Crime;

class CrimeRepository
{
    public function __construct()
    {
    }

    public function perform($request)
    {
        if (Auth::user()->canPerform('crime')) {
            $crime = Crime::findOrFail($request->crime);
            if(Auth::user()->timers->crime > now()){
                alert()->warning('Je moet nog even wachten');
            }
            else {
                Auth::user()->cash += $crime->earn_cash;
                Auth::user()->xp += $crime->earn_xp;
                Auth::user()->timers->update(['crime' => now()]);
                Auth::user()->save();
                event(new PerformCrime($crime));
                alert()->success('Crime ' . $request->crime . ' excecuted');
            }
        } else {
            alert()->warning('You have to wait');
        }
    }
}
