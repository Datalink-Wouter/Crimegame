<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CrimeService;
use App\Crime;
use Auth;

class CrimesController extends Controller
{
    protected $CrimeService;

    public function __construct(CrimeService $CrimeService)
    {
        $this->CrimeService = $CrimeService;
    }

    public function index()
    {
        $crimes = Crime::get();
        return view("crimes.index", compact('crimes'));
    }

    public function perform(Request $request)
    {
        $this->CrimeService->perform($request);
        return redirect(route('crimes'));
    }
}
