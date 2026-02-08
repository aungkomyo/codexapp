<?php

namespace App\Http\Controllers;

use App\Models\RiceType;
use Illuminate\Http\Request;

class RiceTypeController extends Controller
{
    public function index()
    {
        $riceTypes = RiceType::query()->latest()->get();

        return view('rice_types.index', compact('riceTypes'));
    }

    public function create()
    {
        return view('rice_types.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'origin' => ['nullable', 'string', 'max:120'],
            'notes' => ['nullable', 'string', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        RiceType::create($validated);

        return redirect()->route('rice-types.index');
    }

    public function edit(RiceType $riceType)
    {
        return view('rice_types.edit', compact('riceType'));
    }

    public function update(Request $request, RiceType $riceType)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'origin' => ['nullable', 'string', 'max:120'],
            'notes' => ['nullable', 'string', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $riceType->update($validated);

        return redirect()->route('rice-types.index');
    }

    public function destroy(RiceType $riceType)
    {
        $riceType->delete();

        return redirect()->route('rice-types.index');
    }
}
