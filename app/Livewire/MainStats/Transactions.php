<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\Transaction;

class Transactions extends Component
{
	public function render()
	{
		return view('livewire.mainstats.transactions', ['transaction' => Transaction::all()]);
	}
}