<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\TransactionHash;

class TransactionsHash extends Component
{
    public $transactionsHash = [];

    public function mount()
    {
        $this->transactionsHash = TransactionHash::select('date', 'tx_hash', 'from', 'to', 'memo', 'status', 'amount')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pages.transactions-hash');
    }
}
