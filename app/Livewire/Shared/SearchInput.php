<?php

namespace App\Livewire\Shared;

use App\Livewire\Flights\Flights;
use App\Models\Flights as ModelsFlights;
use Illuminate\Support\Str;
use Livewire\Component;

class SearchInput extends Component
{
    public $model; 
    public $search = '';
    public $results = [];

    // Mapeo de nombres que recibes en el Blade vs Clases reales
    protected $modelMapping = [
        'flights' => Flights::class,
    ];

    public function buscar()
    {
        $query = null;

        switch ($this->model) {
            case 'flights':
                $query = ModelsFlights::where('destination', 'like', "%{$this->search}%")
                    ->limit(10)
                    ->get();

                break;
        }

        $this->results = $query;


        // 2. Realizar la búsqueda dinámica
        // Nota: Asumimos que todos tus modelos tienen una columna 'name' o similar
        /* $resultados = $modelClass::where('name', 'like', "%{$this->search}%")
            ->limit(10)
            ->get();

        // 3. Notificar al componente que corresponda con los resultados
        $this->dispatch('search-results-updated', [
            'results' => $resultados,
            'model'   => $modelKey
        ]); */

        // Si solo quieres probar que llega bien:
        // dd($modelClass, $this->search);
    }
    
    public function render()
    {
        return view('livewire.shared.search-input');
    }
}
