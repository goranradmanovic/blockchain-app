<div class="p-3 bg-neutral-900 rounded-lg">
    <x-dashboard.chart wire:key="uniqueKey2" id="revenueChart" title="On Chain Revenue" labels="{{ json_encode($revenuesLabels) }}" dataset="{{ json_encode($revenuesDataset) }}" />
</div>