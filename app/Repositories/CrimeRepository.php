<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Events\PerformCrime;
use Auth;
use App\Models\Crime;
use DB;

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
                Auth::user()->resources->update([
                    'cash' => DB::raw('cash + ' . $crime->earn_cash),
                    'xp' => DB::raw('xp + ' . $crime->earn_xp)
                ]);
                Auth::user()->timers->update(['crime' => now()]);
                event(new PerformCrime($crime));
                alert()->success('Crime ' . $request->crime . ' excecuted');
            }
        } else {
            alert()->warning('You have to wait');
        }
    }
}
