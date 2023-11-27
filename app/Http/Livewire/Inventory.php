<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Inventory extends Component
{
    public function render()
    {
        $inventories = Vehicle::join('vehicle_images', 'vehicle_images.vehicle_code', 'vehicles.code')
        ->groupBy('vehicle_images.vehicle_code')->inRandomOrder()   
        ->get(array('vehicles.*', 'vehicle_images.image'));
        return view('livewire.inventory', ['inventories' => $inventories])->layout('layouts.base');
    }
}
