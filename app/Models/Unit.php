<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name',
        'symbol',
        'description',
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
