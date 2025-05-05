<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\BlockHash;

class BlocksHash extends Component
{
    public $blocksHash = [];

    public function mount()
    {
        $this->blocksHash = BlockHash::select('height', 'block_hash', 'data_hash', 'ledger_hash', 'txs', 'total_xe', 'mined')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pages.blocks-hash');
    }
}
