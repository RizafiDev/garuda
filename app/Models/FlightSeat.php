<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSeat extends Model
{
    protected $fillable = [
        'flight_id',
        'row',
        'column',
        'class_type',
        'is_available',
    ];
    use HasFactory;
}
