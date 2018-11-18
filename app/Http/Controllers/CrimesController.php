<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crime;

class CrimesController extends Controller
{
    public function index()
    {
        $crimes = Crime::get();
        return view("crimes.index", compact('crimes'));
    }

    public function perform(Request $request)
    {
        $request->validate([
            'crime' => 'required'
        ]);

        return redirect(route('crimes'));
    }
}
    