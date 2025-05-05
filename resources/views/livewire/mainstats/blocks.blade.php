<div class="flex flex-wrap justify-between content-center gap-2 h-full py-4 px-3">
	<x-dashboard.card title="Blocks Total" icon="fa-cubes" value="{{ number_format($blocks[0]->total) }}" />
	<x-dashboard.card title="Blocks last 24 hrs" icon="fa-cubes" value="{{ number_format($blocks[0]->day) }}" />
	<x-dashboard.card title="Block Time last 24 hrs" icon="fa-clock" value="{{ $blocks[0]->time }} s" />
	<x-dashboard.card title="Blocks / Hour last 24 hrs" icon="fa-clock" value="{{ $blocks[0]->hour }}" />
</div>