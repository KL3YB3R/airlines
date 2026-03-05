<?php

namespace App\Livewire\Actions;

use Livewire\Component;

class SidebarOptions extends Component
{
    public function sendSidebarOptions($role)
    {
        switch ($role) {
            case '2':
                return $this->PaxOptions();
                break;
        }
    }

    public function PaxOptions()
    {
        return array(
            [
                'route' => 'myTravels.index',
                'icon' => 'notepad-text',
                'name' => 'Mis Viajes',
            ],
            [
                'route' => 'tickets.index',
                'icon' => 'tickets-plane',
                'name' => 'Mis Boletos',
            ],
            [
                'route' => 'flights.index',
                'icon' => 'plane',
                'name' => 'Vuelos',
            ],
        );
    }
}
