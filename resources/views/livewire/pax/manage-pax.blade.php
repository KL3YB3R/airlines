<x-layouts.header></x-layouts.header>
<section class="flex w-full gap-10">

    <div class="w-64 shrink-0"> 
        <x-layouts.sidebar :options="$sidebarOptions" />
    </div>

    <livewire:shared.search-input wire:model="search" model="flights" class="flex-1" />
</section>