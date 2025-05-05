<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\TransactionHash;

class TransactionsHash extends Component
{
    public $transactionsHash = [];

    public function mount()
    {
        $this->transactionsHash = TransactionHash::select(['date', 'tx_hash', 'from', 'to', 'amount'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.mainstats.transactions-hash');
    }
}
