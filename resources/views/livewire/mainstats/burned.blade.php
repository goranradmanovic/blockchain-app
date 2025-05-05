<div class="flex flex-wrap justify-between content-center gap-2 h-full pb-3 px-3">
	<x-dashboard.card title="XE Burned total" icon="fa-bolt" value="{{ number_format($burned[0]->total_amount) }}" height="h-full" />
	<x-dashboard.card title="XE Burned last 30 days" icon="fa-bolt" value="{{ number_format($burned[0]->last_30d_amount) }}" height="h-full" />
</div>