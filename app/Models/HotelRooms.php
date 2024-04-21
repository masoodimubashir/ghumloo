<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'bed_type_id',
        'vendor_id',
        'hotel_id',
        'room_name',
        'room_number',
        'area',
        'meal_plan',
        'price_per_night',
        'discount',
        'tax',
        'max_person',
        'max_children',
        'free_cancellation_in_days',
        'free_cancellation',
        'breakfast',
        'lunch',
        'availability_status',
        'dinner',
        'services',
        'images',
        'description',
    ];


}
