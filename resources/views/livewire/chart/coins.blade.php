<div class="p-3 bg-neutral-900 rounded-lg">
    <x-dashboard.chart wire:key="uniqueKey1" id="coinChart" title="Coin Value" labels="{{ json_encode($coinLables) }}" dataset="{{ json_encode($coinDataset) }}" />
</div>