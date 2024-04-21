<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state_id',
        'status',
    ];

    protected function city(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords(strtolower($value)),
        );
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'city_id');
    }
}
