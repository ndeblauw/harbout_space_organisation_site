<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $ttl = config('app.welcome_cache_ttl');

        $upcoming = cache()->remember("welcome_upcoming", $ttl, function() {
            return Activity::where('begin_date', '>=', now())->orderBy('begin_date', 'asc')->get();
        });
        $selection_past = cache()->remember('welcome_past', $ttl, function() {
             return Activity::where('begin_date', '<', now())->inRandomOrder()->take(5)->get();
        });
        $locations = cache()->remember('welcome_location', $ttl, function() {
            return Location::all();
        });

        return view('welcome', compact('upcoming', 'selection_past', 'locations'));
    }
}
