<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\BlockHash;

class BlocksHash extends Component
{
    public $blocksHash = [];

    public function mount()
    {
        $this->blocksHash = BlockHash::select(['height', 'block_hash', 'total_xe', 'mined'])->get()->toArray();
    }
    
    public function render()
    {
        return view('livewire.mainstats.blocks-hash');
    }
}
