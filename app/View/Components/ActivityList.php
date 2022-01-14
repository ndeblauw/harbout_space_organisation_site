<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActivityList extends Component
{
    public $activities;

    public function __construct($activities = null)
    {
        $this->activities = $activities;
    }

    public function render()
    {
        return view('components.activity-list');
    }
}
