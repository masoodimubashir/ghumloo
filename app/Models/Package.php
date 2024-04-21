<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'package_price',
        'packageid',
        'discount_price',
        'gst',
        'total_stay_period',
        'status',
        'popular',
        'validity',
        'description',
        'short_description',
        'slug',
        'booking_date',
        'images',
    ];

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(
            Hotel::class,
            'hotel_package',
            'package_id',
            'hotel_id')->withPivot('price_per_stay', 'stay_period');
    }
}
