<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{
    Use Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'company_name',
        'gst_number',
        'hotel_name',
        'manager_name',
        'image',
        'address',
        'email',
        'contact_person_name',
        'contact_person_number',
        'show_password',
        'commission',
        'status',
        'number_verified_at',
        'email_verified_at',
        'old_password',
        'password',
    ];


    public function hotels():HasMany
    {
        return $this->hasMany(Hotel::class);
    }





    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed'
        ];
    }
}
