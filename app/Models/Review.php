<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'reviewable_id',
        'reviewable_type',
        'user_id',
        'rating',
        'comment',
    ];

    public function reviewable(): MorphTo
    {
        return $this->morphTo('reviewable', 'reviewable_type', 'reviewable_id');
    }


    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }



}
