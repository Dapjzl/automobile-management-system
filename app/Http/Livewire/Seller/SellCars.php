<?php

namespace App\Http\Livewire\Seller;

use App\Models\Vehicle;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;
use App\Models\VehicleImages;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellCars extends Component
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
    public $brand;
    public $model;
    public $vehicle_type;
    public $transmission;
    public $price;
    public $description;
    public $vehiclesImages;


    public function updated($fields)
    {
            $this->validateOnly($fields, [
                'name' => ['required', 'string', 'max:255'],
                'engine' => ['required', 'string', 'max:255'],
                'seat' => ['required', 'string', 'max:255'],
                'kilometre' => ['required', 'string', 'max:255'],
                'reg_year' => ['required', 'string', 'max:255'],
                'model' => ['required', 'string', 'max:255'],
                'brand' => ['required', 'string', 'max:255'],
                'fuel' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'miles' => ['required', 'string', 'max:255'],
                'vehicle_type' => ['required', 'string', 'max:255'],
                'transmission' => ['required', 'string', 'max:255'],
                'price' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
            ]);
    }

    public function addVehicle()
    {
            $this->validate([
                'name' => ['required', 'string', 'max:255'],
                'engine' => ['required', 'string', 'max:255'],
                'seat' => ['required', 'string', 'max:255'],
                'kilometre' => ['required', 'string', 'max:255'],
                'reg_year' => ['required', 'string', 'max:255'],
                'model' => ['required', 'string', 'max:255'],
                'brand' => ['required', 'string', 'max:255'],
                'fuel' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'miles' => ['required', 'string', 'max:255'],
                'vehicle_type' => ['required', 'string', 'max:255'],
                'transmission' => ['required', 'string', 'max:255'],
                'price' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
            ]);

            if(empty($this->vehiclesImages)){
                $this->dispatchBrowserEvent('upload-error');
            }
            else{
            $random = Str::random(5);
            $ranCode = "VEC-".$random;

                $vehicle = new Vehicle();
                $vehicle->name = $this->name;
                $vehicle->engine = $this->engine;
                $vehicle->seat = $this->seat; 
                $vehicle->kilometre = $this->kilometre;
                $vehicle->reg_year = $this->reg_year;
                $vehicle->fuel = $this->fuel;
                $vehicle->model = $this->model;
                $vehicle->brand = $this->brand;
                $vehicle->location = $this->location;
                $vehicle->miles = $this->miles;
                $vehicle->vehicle_type = $this->vehicle_type; 
                $vehicle->transmission = $this->transmission;
                $vehicle->price = $this->price;
                $vehicle->description = $this->description;
                $vehicle->code = $ranCode;
                $vehicle->seller_code = Auth::user()->code;

                // dd($sel);
                $vehicle->save();
                
                //This uploads multiple images
                if(!empty($this->vehiclesImages))
                {
                    foreach($this->vehiclesImages as $photo){
                        $originalname = $photo->getClientOriginalName();
                        $file_extension = $photo->getClientOriginalExtension();
                        $filename = $originalname;
                
                        $photo->storeAs('vehicleImages', $filename);

                        VehicleImages::create([
                            'vehicle_code' => $ranCode,
                            'seller_code' =>  Auth::user()->code,
                            'image'   =>$filename
                        ]);

                    }
                }
            $this->dispatchBrowserEvent('seller-success');
        }
    }


    public function render()
    {
        $brands = VehicleBrand::all();
        $models = VehicleModel::all();
        return view('livewire.seller.sell-cars', ['brands'=> $brands, 'models'=>$models])->layout('layouts.admin');
    }
} 
