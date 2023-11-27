<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SellerProfile extends Component
{
    public function render()
    {
        return view('livewire.seller.seller-profile')->layout('layouts.admin');
    }
}
