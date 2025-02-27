<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClassFacility extends Model
{
    use HasFactory;

    protected $table = 'flight_class_facility';
    protected $fillable = ['flight_class_id', 'facility_id'];

    public function flightClass()
    {
        return $this->belongsTo(FlightClass::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
