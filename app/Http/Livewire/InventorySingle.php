<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Vehicle;
use Livewire\Component;
use App\Models\VehicleImages;

class InventorySingle extends Component
{
    public $code;
    
    public function mount($code) {
        $list = Vehicle::where('code', $code)->first();
    }

    public function render()
    {
        $details = Vehicle::join('users', 'users.code', 'vehicles.seller_code')->where('vehicles.code', $this->code)->first();
        $images = VehicleImages::where('vehicle_code', $this->code)->inRandomOrder()->get(array('image'));
        $images_single = VehicleImages::where('vehicle_code', $this->code)->inRandomOrder()->first(array('image'));
        return view('livewire.inventory-single', ['details'=>$details, 'images'=>$images, 'images_single'=>$images_single])->layout('layouts.base');
    }
}
