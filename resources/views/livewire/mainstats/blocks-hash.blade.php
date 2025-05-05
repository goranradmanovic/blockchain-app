<div>
    <x-dashboard.table wire:key="uniqueKeyTbl-1" id="recent-blocks" title="Recent Blocks" dataset="{{ json_encode($blocksHash) }}" />
</div>
