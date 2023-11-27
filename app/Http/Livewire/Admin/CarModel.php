<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\VehicleModel;

class CarModel extends Component
{
    public $model;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'model' => ['required', 'string', 'max:255']
        ]);
    }

    public function addModel()
    {
        $this->validate([
            'model' => ['required', 'string', 'max:255']
        ]);
        $random = Str::random(5);
        $ranCode = "MODEL-".$random;

        $mod = new VehicleModel();
        $mod->model = $this->model;
        $mod->code = $ranCode;

        $mod->save();
        
        $this->dispatchBrowserEvent('model-success');
    }

    public function render()
    {
        return view('livewire.admin.car-model')->layout('layouts.admin');
    }
}
