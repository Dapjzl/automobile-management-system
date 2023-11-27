<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\VehicleBrand;

class CarBrand extends Component
{
    public $brand;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'brand' => ['required', 'string', 'max:255']
        ]);
    }

    public function addBrand()
    {
        $this->validate([
            'brand' => ['required', 'string', 'max:255']
        ]);
        $random = Str::random(5);
        $ranCode = "BRAND-".$random;

        $bnd = new VehicleBrand();
        $bnd->brand = $this->brand;
        $bnd->code = $ranCode;

        $bnd->save();
        
        $this->dispatchBrowserEvent('brand-success');
    }
    
    public function render()
    {
        return view('livewire.admin.car-brand')->layout('layouts.admin');
    }
}
