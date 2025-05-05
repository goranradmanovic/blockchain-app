<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use App\Models\Coin;

class Coins extends Component
{
    public $coins = [];
    public $coinLables = [];
    public $coinEthData = [];
    public $coinUsdData = [];
    public $coinDataset = [];

    public function mount()
    {   
        $this->foramtCoinsData();
    }

    public function foramtCoinsData() {
        $this->coins = Coin::select(['ethPerXE', 'usdPerXE', 'date'])->get()->toArray();

        $this->coinLables = array_map(function($item) {
            return date_format(date_create($item['date']), 'd/m/Y');
        }, $this->coins);

        $this->coinEthData = array_map(function($item) {
            return $item['ethPerXE'];
        }, $this->coins);

        $this->coinUsdData = array_map(function($item) {
            return $item['usdPerXE'];
        }, $this->coins);

        $this->coinDataset = [
            [
                "label" => "Price in ETH", 
                "data" => $this->coinEthData,
                "borderWidth" => 1,
                "fill" => false, 
                "backgroundColor" => "#FFAC1C", 
                "borderColor" => "#FFAC1C", 
                "tension" => 0.4 
            ], 
            [
                "label" => "Price in USD", 
                "data" => $this->coinUsdData,
                "borderWidth" => 1,
                "fill" => false, 
                "backgroundColor" => "#0ECC5B", 
                "borderColor" => "#0ECC5B", 
                "tension" => 0.4 
            ] 
        ]; 
    }

    public function render()
    {
        return view('livewire.chart.coins');
    }
}