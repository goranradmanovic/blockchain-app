<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\NodeHash;

class NodesHash extends Component
{
    public $nodesHash = [];

    public function mount()
    {
        $this->nodesHash = NodeHash::select('address_hash', 'stake_hash', 'type', 'location', 'availability', 'status', 'last_seen')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pages.nodes-hash');
    }
}
