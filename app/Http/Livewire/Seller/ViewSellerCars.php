<?php

namespace App\Http\Livewire\Seller;

use App\Models\Vehicle;
use Livewire\Component;
use App\Models\VehicleImages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ViewSellerCars extends Component
{

    public function deleteVehicle($val){
        $delete = Vehicle::where('code', $val)->first();
        $image = VehicleImages::where('vehicle_code', $val)->get();
        foreach ($image as $value) {
            $this->value = $value;
            $path ="asset/image/vehicleImages/".$value->image; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }else{}
            $value->delete();
            
        }
        $delete->delete();
    }
    public function render()
    {
        $views = Vehicle::where('vehicles.seller_code', Auth::user()->code)
        ->join('vehicle_images', 'vehicle_images.vehicle_code', 'vehicles.code')->groupBy('vehicle_images.vehicle_code')->inRandomOrder()   
        ->get(array('vehicles.*', 'vehicle_images.image'));

        return view('livewire.seller.view-seller-cars', ['views' => $views])->layout('layouts.admin');
    }
}
