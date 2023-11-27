<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SoldCars extends Component
{
    public function render()
    {
        return view('livewire.seller.sold-cars')->layout('layouts.admin');
    }
}
