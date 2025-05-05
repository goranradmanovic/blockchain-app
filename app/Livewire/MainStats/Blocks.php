<?php

namespace App\Livewire\MainStats;

use Livewire\Component;
use App\Models\Block;

class Blocks extends Component
{
    public function render()
    {
        return view('livewire.mainstats.blocks', ['blocks' => Block::all()]);
    }
}
