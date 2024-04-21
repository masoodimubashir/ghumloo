<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponCode extends Model
{
    protected $fillable = [
        'name',
        'code',
        'type',
        'discount',
        'valid_from',
        'valid_to',
        'status',
        'used_coupon',
    ];

    protected $casts = [
        'valid_from' => 'date',
        'valid_to' => 'date',
    ];
}
