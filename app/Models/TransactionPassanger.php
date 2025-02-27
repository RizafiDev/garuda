<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionPassanger extends Model
{
    protected $fillable = [
        'transaction_id',
        'flight_Seat_id',
        'name',
        'date_of_birth',
        'nationality',
    ];
    use HasFactory;
}
