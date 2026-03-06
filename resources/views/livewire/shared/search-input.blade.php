<div class="flex-1 min-w-0 py-4 mt-5">
    <form wire:submit.prevent="buscar" class="w-full max-w-2xl mx-auto relative">
        <flux:icon.search class="absolute top-3.5 left-3 text-gray-400" />
        
        <input ºº
            type="text" 
            wire:model="search" 
            class="w-full border border-gray-300 rounded-full text-lg p-3 px-5 pl-11 focus:outline-none focus:ring-2 focus:ring-zinc-500" 
            placeholder="Buscar"
        >
        
        {{-- Botón invisible o Enter para ejecutar el submit --}}
        <button type="submit" class="hidden"></button>
    </form>

    {{-- @if($results) --}}
        <livewire:shared.flights-items />
    {{-- @endif --}}

</div>