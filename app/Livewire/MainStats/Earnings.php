<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\Earning;

class Earnings extends Component
{
	public function render()
	{
		return view('livewire.mainstats.earnings', ['earnings' => Earning::all()]);
	}
}