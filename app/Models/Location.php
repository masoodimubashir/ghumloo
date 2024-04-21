<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Location extends Model
{
    protected $fillable = [
        'country',
        'city',
        'state',
        'status',
        'slug',
    ];

    protected function locations(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [
                'country' => ucwords(strtolower(data_get($value, 'country'))),
                'city' => ucwords(strtolower(data_get($value, 'city'))),
                'state' => ucwords(strtolower(data_get($value, 'state'))),
                'address' => ucwords(strtolower(data_get($value, 'address'))),


            ],
        );
    }

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(
            Hotel::class,
            'hotel_locations',
            'hotel_id',
            'location_id'
        );
    }
}
