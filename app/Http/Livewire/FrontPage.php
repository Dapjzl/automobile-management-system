<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Vehicle;
use Livewire\Component;


class FrontPage extends Component
{
    public function render()
    {
        $listings = Vehicle::join('vehicle_images', 'vehicle_images.vehicle_code', 'vehicles.code')
        ->groupBy('vehicle_images.vehicle_code')->inRandomOrder()   
        ->paginate(30, array('vehicles.*', 'vehicle_images.image'));
        return view('livewire.front-page', ['listings' => $listings])->layout('layouts.base');
    }
}
