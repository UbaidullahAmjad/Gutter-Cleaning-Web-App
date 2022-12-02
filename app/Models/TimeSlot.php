<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot_day_id',
        'start_time',
        'end_time',
        'active'
    ];

    public function day()
    {
        return $this->belongsTo(SlotDay::class, 'slot_day_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'time_slot_id');
    }
}
