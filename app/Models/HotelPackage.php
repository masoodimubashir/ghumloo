<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HotelPackage extends Pivot
{
    protected $fillable = [
        'hotel_id',
        'package_id',
        'price_per_stay',
        'stay_period',
    ];
}
