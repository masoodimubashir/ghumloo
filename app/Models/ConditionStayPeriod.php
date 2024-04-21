<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionStayPeriod extends Model
{
    protected $fillable = [
        'num_of_days',
        'discount',
    ];
}
