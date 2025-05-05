<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:mainstats.blocks />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="h-1/2 w-full">
                    <livewire:mainstats.transactions />
                </div>
                <div class="h-1/2 w-full">
                    <livewire:mainstats.stakes />
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="h-1/2 w-full">
                    <livewire:mainstats.earnings />
                </div>
                <div class="h-1/2 w-full">
                    <livewire:mainstats.burned />
                </div>
            </div>
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-2">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:chart.coins />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:chart.revenues />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            {{-- <!--<x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--> --}}
            <livewire:map.network-map />
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-2">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:mainstats.blocks-hash />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:mainstats.transactions-hash />
            </div>
        </div>
    </div>
</x-layouts.app>
