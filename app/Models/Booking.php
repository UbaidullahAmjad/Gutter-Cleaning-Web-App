<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'serviceable_id',
        'serviceable_type',
        'time_slot_id',
        'service_id',
        'date',
    ];

    public function customer(){
        return $this->belongsTo(User::class,'serviceable_id');
    }
    public function guest(){
        return $this->belongsTo(Guest::class,'serviceable_id');
    }
    public function slot(){
        return $this->belongsTo(TimeSlot::class,'time_slot_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
