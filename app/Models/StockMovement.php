<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    protected $fillable = [
        'rice_type_id',
        'unit_id',
        'quantity',
        'movement_type',
        'reference',
        'notes',
    ];

    public function riceType()
    {
        return $this->belongsTo(RiceType::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
