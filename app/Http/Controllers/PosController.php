<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\RiceType;
use App\Models\Unit;

class PosController extends Controller
{
    public function index()
    {
        $riceTypes = RiceType::query()->with(['prices.unit'])->orderBy('name')->get();
        $units = Unit::query()->orderBy('name')->get();
        $prices = Price::query()->with(['riceType', 'unit'])->latest()->get();

        return view('pos.index', compact('riceTypes', 'units', 'prices'));
    }
}
