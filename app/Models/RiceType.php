<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiceType extends Model
{
    protected $fillable = [
        'name',
        'origin',
        'notes',
        'is_active',
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function stockMovements()
    {
        return $this->hasMany(StockMovement::class);
    }
}
