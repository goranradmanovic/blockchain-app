<div class="flex flex-wrap justify-between content-center gap-2 h-full pt-3 px-3 pb-2">
	<x-dashboard.card title="Transactions Total" icon="fa-paper-plane" value="{{ number_format($transaction[0]->total) }}" height="h-full" />
	<x-dashboard.card title="Transactions last 24 hrs" icon="fa-paper-plane" value="{{ $transaction[0]->day }}" height="h-full" />
</div>