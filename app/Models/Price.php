<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'rice_type_id',
        'unit_id',
        'amount',
        'effective_date',
    ];

    protected $casts = [
        'effective_date' => 'date',
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
