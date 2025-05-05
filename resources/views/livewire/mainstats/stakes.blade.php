<div class="flex flex-wrap justify-between content-center gap-2 h-full pb-3 px-3">
	<x-dashboard.card title="Stakes Total" icon="fa-triangle-exclamation" value="{{ $stake[0]->count }}" height="h-full" />
	<x-dashboard.card title="Staked XE 20.5% of supply" icon="fa-triangle-exclamation" value="{{ number_format($stake[0]->staked_amount) }}" height="h-full" />
</div>