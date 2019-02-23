<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Events\PerformCrime;
use Auth;
use Date;

class CrimeRepository
{
    public function __construct()
    {
    }

    public function perform(Request $request)
    {
        $request->validate([
            'crime' => 'required'
        ]);

        if (Auth::user()->canPerformCrime()) {
            Auth::user()->timers->update(['crime' => now()]);
            alert()->success('Crime '.$request->crime.' excecuted');
        } else {
            alert()->warning('You have to wait');
        }
    }
}
