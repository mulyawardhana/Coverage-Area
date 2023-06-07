<?php

namespace App\Models\Freight;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirLandFreightDetail extends Model
{
    use HasFactory;
    protected $guarded =[""];
    protected $table="air_land_freight_details";
}
