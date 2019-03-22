<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CrimeRepository;
use App\Http\Requests\PerformCrimeRequest;
use App\Models\Crime;

class CrimesController extends Controller
{
    public function __construct(CrimeRepository $crimeRepository)
    {
        $this->middleware('auth');
        $this->Crime = $crimeRepository;
    }

    public function index()
    {
        $crimes = Crime::get();
        return view("crimes.index", compact('crimes'));
    }

    public function perform(PerformCrimeRequest $request)
    {
        $this->Crime->perform($request);
        return redirect(route('crimes'));
    }
}
