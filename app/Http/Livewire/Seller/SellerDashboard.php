<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SellerDashboard extends Component
{
    public function render()
    {
        return view('livewire.seller.seller-dashboard')->layout('layouts.admin');
    }
}
