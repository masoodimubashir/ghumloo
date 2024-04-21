<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyType extends Model
{
    protected $fillable = [
        'property_type',
        'status',
        'slug'
    ];

    protected function propertyType(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords(strtolower($value)),
        );
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'property_type_id');
    }
}
