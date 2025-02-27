<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClass extends Model
{
    protected $fillable = [
        'flight_id',
        'class_type',
        'price',
        'total_seats',
    ];
    use HasFactory;
}
