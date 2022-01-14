<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $upcoming = Activity::where('begin_date', '>=', now())->orderBy('begin_date', 'asc')->get();
        $selection_past = Activity::where('begin_date', '<', now())->inRandomOrder()->take(5)->get();
        $locations = Location::all();

        return view('welcome', compact('upcoming', 'selection_past', 'locations'));
    }
}
