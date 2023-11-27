<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public function render()
    {
        $views = Vehicle::where('vehicles.seller_code', Auth::user()->code)
        ->join('vehicle_images', 'vehicle_images.vehicle_code', 'vehicles.code')->groupBy('vehicle_images.vehicle_code')->inRandomOrder()   
        ->get(array('vehicles.*', 'vehicle_images.image'));
        return view('livewire.profile', ['views' => $views])->layout('layouts.base');
    }
}
