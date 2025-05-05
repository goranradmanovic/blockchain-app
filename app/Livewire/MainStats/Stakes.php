<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\Stake;

class Stakes extends Component
{
	public function render()
	{
		return view('livewire.mainstats.stakes', ['stake' => Stake::all()]);
	}
}