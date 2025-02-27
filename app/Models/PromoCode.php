<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'discount_type', 'discount', 'valid_until', 'is_used'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
