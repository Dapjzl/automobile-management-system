<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         {
        Vehicle::create([
            'name' => 'Toyota Corolla',
            'engine' => '1.8L',
            'seat' => '5',
            'kilometre' => '45000',
            'reg_year' => '2019',
            'fuel' => 'Petrol',
            'transmission' => 'Automatic',
            'price' => '12000',
            'brand' => 'Toyota',
            'model' => 'Corolla',
            'location' => 'Lagos',
            'miles' => '28000',
            'vehicle_type' => 'Sedan',
            'description' => 'Well maintained Toyota Corolla, single owner.',
            'code' => 'VH001',
            'seller_code' => 'SLR001',
        ]);

        Vehicle::create([
            'name' => 'Honda Civic',
            'engine' => '2.0L',
            'seat' => '5',
            'kilometre' => '60000',
            'reg_year' => '2018',
            'fuel' => 'Petrol',
            'transmission' => 'Manual',
            'price' => '10000',
            'brand' => 'Honda',
            'model' => 'Civic',
            'location' => 'Abuja',
            'miles' => '37000',
            'vehicle_type' => 'Sedan',
            'description' => 'Clean Honda Civic with good mileage.',
            'code' => 'VH002',
            'seller_code' => 'SLR002',
        ]);
         Vehicle::create([
            'name' => 'Honda Accord',
            'engine' => '2.0L',
            'seat' => '5',
            'kilometre' => '60000',
            'reg_year' => '2018',
            'fuel' => 'Petrol',
            'transmission' => 'Manual',
            'price' => '10000',
            'brand' => 'Honda',
            'model' => 'Accord',
            'location' => 'Abuja',
            'miles' => '37000',
            'vehicle_type' => 'Sedan',
            'description' => 'Clean Honda Accord with good mileage.',
            'code' => 'VH002',
            'seller_code' => 'SLR002',
        ]); 
        Vehicle::create([
            'name' => 'Honda Centra',
            'engine' => '2.0L',
            'seat' => '5',
            'kilometre' => '60000',
            'reg_year' => '2018',
            'fuel' => 'Petrol',
            'transmission' => 'Manual',
            'price' => '10000',
            'brand' => 'Honda',
            'model' => 'Centra',
            'location' => 'Abuja',
            'miles' => '37000',
            'vehicle_type' => 'Sedan',
            'description' => 'Clean Honda Centra with good mileage.',
            'code' => 'VH002',
            'seller_code' => 'SLR002',
        ]); 
        Vehicle::create([
            'name' => 'Honda SE',
            'engine' => '2.0L',
            'seat' => '5',
            'kilometre' => '60000',
            'reg_year' => '2018',
            'fuel' => 'Petrol',
            'transmission' => 'Manual',
            'price' => '10000',
            'brand' => 'Honda',
            'model' => 'SE',
            'location' => 'Abuja',
            'miles' => '37000',
            'vehicle_type' => 'Sedan',
            'description' => 'Clean Honda SE with good mileage.',
            'code' => 'VH002',
            'seller_code' => 'SLR002',
        ]);
    }
    }
}
