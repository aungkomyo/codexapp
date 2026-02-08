<?php

namespace App\Http\Controllers;

use App\Models\RiceType;
use App\Models\StockMovement;
use App\Models\Unit;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $movements = StockMovement::query()->with(['riceType', 'unit'])->latest()->get();

        return view('stocks.index', compact('movements'));
    }

    public function create()
    {
        $riceTypes = RiceType::query()->orderBy('name')->get();
        $units = Unit::query()->orderBy('name')->get();

        return view('stocks.create', compact('riceTypes', 'units'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rice_type_id' => ['required', 'exists:rice_types,id'],
            'unit_id' => ['required', 'exists:units,id'],
            'quantity' => ['required', 'numeric'],
            'movement_type' => ['required', 'in:in,out'],
            'reference' => ['nullable', 'string', 'max:120'],
            'notes' => ['nullable', 'string', 'max:255'],
        ]);

        StockMovement::create($validated);

        return redirect()->route('stocks.index');
    }
}
