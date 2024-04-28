<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hotel extends Model
{
	use HasFactory;

	protected $fillable = [
        'property_type_id',
        'vendor_id',
        'city_id',
        'hotel_name',
        'email',
        'phone_one',
        'phone_two',
        'check_in',
        'check_out',
        'description',
        'address',
        'search_area',
        'longitude',
        'latitude',
        'star_rating',
        'active_by_admin',
        'popular',
        'allowed_pets',
        'status',
        'images',
        'slug',
	];

	public function vendor(): BelongsTo
	{
		return $this->belongsTo(Vendor::class);
	}


    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'hotel_rooms');
    }

	public function propertyType(): BelongsTo
	{
		return $this->belongsTo(PropertyType::class, 'property_type_id');
	}

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }


    public function packages(): BelongsToMany{
        return $this->belongsToMany(
            Package::class,
            'hotel_package',
            'package_id',
            'hotel_id')->withPivot('price_per_stay', 'stay_period');
    }

}
