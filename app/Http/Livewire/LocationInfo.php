<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LocationInfo extends Component
{
    public $location;
    public $show_details = false;

    public function toggleShowDetails()
    {
        $this->show_details = !$this->show_details;
    }

    public function render()
    {
        return view('livewire.location-info');
    }
}
