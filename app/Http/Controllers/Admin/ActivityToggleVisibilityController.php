<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;

class ActivityToggleVisibilityController extends Controller
{
    public function __invoke(Activity $activity)
    {
        $activity->update(['visible' => ! $activity->visible]);

        session()->flash('success', '<strong>'.$activity->title.'</strong> is '.($activity->visible ? 'set to visible' : 'no longer visible').'.');

        return redirect()->back();
    }
}
