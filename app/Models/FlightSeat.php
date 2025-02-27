<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSeat extends Model
{
    use HasFactory;

    protected $fillable = ['flight_id', 'row', 'column', 'class_type', 'is_available'];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
