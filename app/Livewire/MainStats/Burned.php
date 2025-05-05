<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\Burn;

class Burned extends Component
{
	public function render()
	{
		return view('livewire.mainstats.burned', ['burned' => Burn::all()]);
	}
}