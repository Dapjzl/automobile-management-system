<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImages extends Model
{
    use HasFactory;
    protected $table = "vehicle_images";

    protected $fillable = [
        'image',
        'seller_code',
        'vehicle_code'
    ];

}
