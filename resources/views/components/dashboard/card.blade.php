@props([
    'title' => '',
    'icon' => '',
    'value' => null,
    'height' => 'h-1/2'
])

<div class="flex-initial w-60 {{ $height }} bg-neutral-900 rounded-lg p-2">
	<p class="text-lg">{{ $title }}</p>
	<p class="text-xl flex mt-4">
		<span class="mr-2">
			<i class="fa-solid {{ $icon }}"></i>
		</span>
		{{ $value }}
	</p>
</div>