<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{

    protected $fillable = [
        'vendor_id',
        'room_number',
        'room_name',
        'area',
        'max_persons',
        'max_children',
        'tax',
        'price_per_night',
        'discount_price',
        'cancellation_in_days',
        'services',
        'overview',
        'images',
        'free_cancellation',
        'lunch',
        'dinner',
        'breakfast',
        'room_availability',
    ];

    public function roomConfiguration(): HasOne
    {
        return $this->hasOne(RoomConfiguration::class);
    }

    public function roomConfigurations(): HasMany
    {
        return $this->hasMany(RoomConfiguration::class, 'room_id');
    }

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotel_rooms');
    }

}
