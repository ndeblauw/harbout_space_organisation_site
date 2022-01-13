<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SiteMenu extends Component
{
    public $menu_items;

    public function __construct()
    {
        $this->menu_items = [
            'Menu item A' => '',
            'Menu item B' => '',
            'Menu item C' => '',
        ];
    }

    public function render()
    {
        return view('layouts.site-menu');
    }
}
