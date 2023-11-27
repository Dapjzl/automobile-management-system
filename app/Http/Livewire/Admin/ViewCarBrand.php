<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\VehicleBrand;

class ViewCarBrand extends Component
{
    public function render()
    {
        $brands = VehicleBrand::all();
        return view('livewire.admin.view-car-brand', ['brands' => $brands])->layout('layouts.admin');
    }
}
