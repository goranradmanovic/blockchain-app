<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use App\Models\Revenue;

class Revenues extends Component
{
    public $revenues = [];
    public $revenuesLabels = [];
    public $revenuesAmounts = [];
    public $revenuesDataset = [];

    public function mount()
    {
        $this->foramtRevenuesData();
    }

    public function foramtRevenuesData()
    {
        $this->revenues = Revenue::select(['amount', 'date'])->get()->toArray();

        $this->revenuesLabels = array_map(function($item) {
            return date_format(date_create($item['date']), 'd/m/Y');
        }, $this->revenues);

        $this->revenuesAmounts = array_map(function($item) {
            return $item['amount'];
        }, $this->revenues);

        $this->revenuesDataset = [
            [
                "label" => "Revenue",
                "data" => $this->revenuesAmounts,
                "borderWidth" => 1,
                "fill" => false, 
                "backgroundColor" => "#40e0d0",
                "borderColor" => "#40e0d0", 
                "tension" => 0.4 
            ]
        ];
    }

    public function render()
    {
        return view('livewire.chart.revenues');
    }
}
