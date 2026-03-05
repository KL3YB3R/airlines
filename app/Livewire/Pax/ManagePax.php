<?php

namespace App\Livewire\Pax;

use App\Livewire\Actions\SidebarOptions;
use Livewire\Component;

class ManagePax extends Component
{
    public $sidebarOptions;

    public function __construct(SidebarOptions $sidebarOptions)
    {
        $this->sidebarOptions = $sidebarOptions;
    } 
    
    public function render()
    {
        $sidebarOptions = $this->sidebarOptions->sendSidebarOptions(2);

        return view('livewire.pax.manage-pax', compact('sidebarOptions'));
    }
}
