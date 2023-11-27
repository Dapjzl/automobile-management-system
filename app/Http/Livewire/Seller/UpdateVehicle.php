<?php

namespace App\Http\Livewire\Seller;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateVehicle extends Component
{
    use WithFileUploads;
    public $name;
    public $engine;
    public $seat;
    public $kilometre;
    public $reg_year;
    public $fuel;
    public $location;
    public $miles;
    public $vehicle_type;
    public $transmission;
    public $price;
    public $description;
    public $vehiclesImages;
    public $code;

    public function mount($code){
        $vehicle = Vehicle::where('code', $code)->first();
        $this->name = $vehicle->name;
        $this->engine = $vehicle->engine;
        $this->seat = $vehicle->seat;
        $this->kilometre = $vehicle->kilometre;
        $this->reg_year = $vehicle->reg_year;
        $this->fuel = $vehicle->fuel;
        $this->location = $vehicle->location;
        $this->miles = $vehicle->miles;
        $this->vehicle_type = $vehicle->vehicle_type;
        $this->transmission = $vehicle->transmission;
        $this->price = $vehicle->price;
        $this->description = $vehicle->description;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => ['required', 'string', 'max:255'],
            'engine' => ['required', 'string', 'max:255'],
            'seat' => ['required', 'string', 'max:255'],
            'kilometre' => ['required', 'string', 'max:255'],
            'reg_year' => ['required', 'string', 'max:255'],
            'fuel' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'miles' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'transmission' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
    }

    public function updateVehicle()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'engine' => ['required', 'string', 'max:255'],
            'seat' => ['required', 'string', 'max:255'],
            'kilometre' => ['required', 'string', 'max:255'],
            'reg_year' => ['required', 'string', 'max:255'],
            'fuel' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'miles' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'transmission' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        $vehicle = Vehicle::where('code', $this->code)->first();
        $this->name = $vehicle->name;
        $this->engine = $vehicle->engine;
        $this->seat = $vehicle->seat;
        $this->kilometre = $vehicle->kilometre;
        $this->reg_year = $vehicle->reg_year;
        $this->fuel = $vehicle->fuel;
        $this->location = $vehicle->location;
        $this->miles = $vehicle->miles;
        $this->vehicle_type = $vehicle->vehicle_type;
        $this->transmission = $vehicle->transmission;
        $this->price = $vehicle->price;
        $this->description = $vehicle->description;

        $vehicle->save();
        $this->dispatchBrowserEvent('update-success');
    }

    
    public function render()
    {
        return view('livewire.seller.update-vehicle')->layout('layouts.admin');
    }
    
}
