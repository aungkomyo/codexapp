<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\RiceType;
use App\Models\Unit;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::query()->with(['riceType', 'unit'])->latest()->get();

        return view('prices.index', compact('prices'));
    }

    public function create()
    {
        $riceTypes = RiceType::query()->orderBy('name')->get();
        $units = Unit::query()->orderBy('name')->get();

        return view('prices.create', compact('riceTypes', 'units'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rice_type_id' => ['required', 'exists:rice_types,id'],
            'unit_id' => ['required', 'exists:units,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'effective_date' => ['nullable', 'date'],
        ]);

        Price::create($validated);

        return redirect()->route('prices.index');
    }

    public function edit(Price $price)
    {
        $riceTypes = RiceType::query()->orderBy('name')->get();
        $units = Unit::query()->orderBy('name')->get();

        return view('prices.edit', compact('price', 'riceTypes', 'units'));
    }

    public function update(Request $request, Price $price)
    {
        $validated = $request->validate([
            'rice_type_id' => ['required', 'exists:rice_types,id'],
            'unit_id' => ['required', 'exists:units,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'effective_date' => ['nullable', 'date'],
        ]);

        $price->update($validated);

        return redirect()->route('prices.index');
    }

    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('prices.index');
    }
}
