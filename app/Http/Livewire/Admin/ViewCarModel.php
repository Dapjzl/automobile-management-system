<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\VehicleModel;

class ViewCarModel extends Component
{
    public function render()
    {
        $models = VehicleModel::all();
        return view('livewire.admin.view-car-model', ['models' => $models])->layout('layouts.admin');
    }
}
