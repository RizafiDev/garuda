<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClass extends Model
{
    use HasFactory;

    protected $fillable = ['flight_id', 'class_type', 'price', 'total_seats'];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'flight_class_facility');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
