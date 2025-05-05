<div>
    <x-dashboard.table wire:key="uniqueKeyTbl-2" id="recent-transactions" title="Recent Transactions" dataset="{{ json_encode($transactionsHash) }}" />
</div>
