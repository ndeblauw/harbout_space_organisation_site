<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivityToggleVisibilityController extends Controller
{
    public function __invoke(Activity $activity)
    {
        $activity->update(['visible' => ! $activity->visible]);

        return redirect()->back();
    }
}
