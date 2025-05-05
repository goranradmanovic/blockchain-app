<?php

namespace App\Livewire\Map;

use Livewire\Component;
use App\Models\Nodes;

class NetworkMap extends Component
{
    public $locations = [];

    public function addLocation($lat, $lng, $name)
    {
        $this->locations[] = compact('lat', 'lng', 'city');
        $this->dispatchBrowserEvent('updateMap', ['locations' => $this->locations]);
    }

    public function mount()
    {   
        $this->locations = Nodes::select(['city', 'lat', 'lng'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.map.network-map');
    }
}
