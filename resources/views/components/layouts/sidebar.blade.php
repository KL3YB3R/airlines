<flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    @foreach ($options as $option)
        <flux:navbar class="-mb-px max-lg:hidden border-b border-zinc-200">
            <flux:navbar.item icon="{{ $option['icon'] }}" :href="route('dashboard')" :current="request()->routeIs($option['route'])" wire:navigate>
                {{ __($option['name']) }}
            </flux:navbar.item>
        </flux:navbar>
    @endforeach
</flux:sidebar>