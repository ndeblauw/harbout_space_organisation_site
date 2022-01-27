<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $ttl = 1;

        $upcoming = cache()->remember('welcome_upcoming', $ttl, function () {
            return Activity::visible()->upcoming()->get();
        });
        $selection_past = cache()->remember('welcome_past', $ttl, function () {
            return Activity::randomSelectionFromPast(10)->get();
        });
        $locations = cache()->remember('welcome_location', $ttl, function () {
            return Location::all();
        });

        return view('welcome', compact('upcoming', 'selection_past', 'locations'));
    }
}
