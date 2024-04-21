<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RoomConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id', 'room_type_id', 'bed_id', 'meal_type', 'ac'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function bedType(): BelongsTo
    {
        return $this->belongsTo(BedType::class, 'bed_id');
    }

    public function roomType(): BelongsTo
    {
        return $this->BelongsTo(RoomType::class);
    }
}
