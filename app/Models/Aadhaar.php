<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aadhaar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'aadhaar_number', 'state', 'phone'
    ];
}
