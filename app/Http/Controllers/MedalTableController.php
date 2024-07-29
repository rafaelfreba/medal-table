<?php

namespace App\Http\Controllers;

use App\Services\MedalTable;

class MedalTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(MedalTable $medals)
    {
        $results = $medals->getMedals();

        return view('medals.index', compact('results'));
    }
}
