<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
        'price',
        'available_seats',
        'contact_email',
        'contact_phone',
        'image',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}