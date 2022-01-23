<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SiteLayout extends Component
{
    public $withAlpine = true;
    public $withToaster;
    public $title;

    public function __construct($title = null, $withToastr = false)
    {
        $this->title = $title ?? 'Default';
        $this->withToaster = $withToastr;
    }

    public function render()
    {
        return view('layouts.site');
    }
}
