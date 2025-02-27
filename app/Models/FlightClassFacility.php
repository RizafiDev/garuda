<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClassFacility extends Model
{
    protected $fillable = [
        'flight_class_id',
        'facility_id',
    ];
    use HasFactory;
}
