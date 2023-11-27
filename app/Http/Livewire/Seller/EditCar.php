<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditCar extends Component
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
    
    public function mount($code){
        
    }
    public function render()
    {
        return view('livewire.seller.edit-car')->layout('layouts.admin');
    }
}
