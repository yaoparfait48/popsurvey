<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Map extends Component
{
    public $longitude;
    public $latitude;


    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.map');
    }
}
