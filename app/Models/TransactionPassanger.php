<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionPassanger extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'flight_seat_id', 'name', 'date_of_birth', 'nationality'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function flightSeat()
    {
        return $this->belongsTo(FlightSeat::class);
    }
}
