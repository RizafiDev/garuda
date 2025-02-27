<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['flight_number', 'airline_id'];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function flightSegments()
    {
        return $this->hasMany(FlightSegment::class);
    }

    public function flightSeats()
    {
        return $this->hasMany(FlightSeat::class);
    }

    public function flightClasses()
    {
        return $this->hasMany(FlightClass::class);
    }
}
