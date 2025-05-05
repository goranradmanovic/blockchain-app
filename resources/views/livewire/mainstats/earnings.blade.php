<div class="flex flex-wrap justify-between content-center gap-2 h-full pt-3 px-3 pb-2">
	<x-dashboard.card title="XE Earning total" icon="fa-wave-square" value="{{ number_format($earnings[0]->all_time_amount) }}" height="h-full" />
	<x-dashboard.card title="XE Earning last 24h" icon="fa-wave-square" value="{{ number_format($earnings[0]->last_24h_amount) }}" height="h-full" />
</div>